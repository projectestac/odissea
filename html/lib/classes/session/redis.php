<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Redis based session handler.
 *
 * @package    core
 * @copyright  2015 Russell Smith <mr-russ@smith2001.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace core\session;

use RedisException;
use RedisClusterException;
use SessionHandlerInterface;

/**
 * Redis based session handler.
 *
 * The default Redis session handler does not handle locking in 2.2.7, so we have written a php session handler
 * that uses locking.  The places where locking is used was modeled from the memcached code that is used in Moodle
 * https://github.com/php-memcached-dev/php-memcached/blob/master/php_memcached_session.c
 *
 * @package    core
 * @copyright  2016 Russell Smith
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class redis extends handler implements SessionHandlerInterface {
    /**
     * Compressor: none.
     */
    const COMPRESSION_NONE      = 'none';
    /**
     * Compressor: PHP GZip.
     */
    const COMPRESSION_GZIP      = 'gzip';
    /**
     * Compressor: PHP Zstandard.
     */
    const COMPRESSION_ZSTD      = 'zstd';

    /**
     * Minimum version of the Redis extension required.
     */
    public const REDIS_EXTENSION_MIN_VERSION = '2.2.4';
    /**
     * Minimum version of the Redis extension required.
     */
    private const REDIS_SERVER_MIN_VERSION = '2.6.12';

    /** @var array $host save_path string  */
    protected array $host = [];
    /** @var int $port The port to connect to */
    protected $port = 6379;
    /** @var array $sslopts SSL options, if applicable */
    protected $sslopts = [];
    /** @var string $auth redis password  */
    protected $auth = '';
    /** @var int $database the Redis database to store sesions in */
    protected $database = 0;
    /** @var array $servers list of servers parsed from save_path */
    protected $prefix = '';
    /** @var int $acquiretimeout how long to wait for session lock in seconds */
    protected $acquiretimeout = 120;
    /** @var int $acquirewarn how long before warning when waiting for a lock in seconds */
    protected $acquirewarn = null;
    /** @var int $lockretry how long to wait between session lock attempts in ms */
    protected $lockretry = 100;
    /** @var int $serializer The serializer to use */
    protected $serializer = \Redis::SERIALIZER_PHP;
    /** @var int $compressor The compressor to use */
    protected $compressor = self::COMPRESSION_NONE;
    /** @var string $lasthash hash of the session data content */
    protected $lasthash = null;

    /**
     * @var int $lockexpire how long to wait in seconds before expiring the lock automatically
     * so that other requests may continue execution, ignored if PECL redis is below version 2.2.0.
     */
    protected $lockexpire;

    /** @var Redis|RedisCluster Connection */
    protected $connection = null;

    /** @var array $locks List of currently held locks by this page. */
    protected $locks = array();

    /** @var int $timeout How long sessions live before expiring. */
    protected $timeout;

    /** @var bool $clustermode Redis in cluster mode. */
    protected bool $clustermode = false;

    /** @var int Maximum number of retries for cache store operations. */
    protected int $maxretries = 3;

    /** @var int $connectiontimeout The number of seconds to wait for a connection or response from the Redis server. */
    protected int $connectiontimeout = 3;

    /**
     * Create new instance of handler.
     */
    public function __construct() {
        global $CFG;

        if (isset($CFG->session_redis_host)) {
            // If there is only one host, use the single Redis connection.
            // If there are multiple hosts (separated by a comma), use the Redis cluster connection.
            $this->host = array_filter(array_map('trim', explode(',', $CFG->session_redis_host)));
            $this->clustermode = count($this->host) > 1;
        }

        if (isset($CFG->session_redis_port)) {
            $this->port = (int)$CFG->session_redis_port;
        }

        if (isset($CFG->session_redis_encrypt) && $CFG->session_redis_encrypt) {
            $this->sslopts = $CFG->session_redis_encrypt;
        }

        if (isset($CFG->session_redis_auth)) {
            $this->auth = $CFG->session_redis_auth;
        }

        if (isset($CFG->session_redis_database)) {
            $this->database = (int)$CFG->session_redis_database;
        }

        if (isset($CFG->session_redis_prefix)) {
            $this->prefix = $CFG->session_redis_prefix;
        }

        if (isset($CFG->session_redis_acquire_lock_timeout)) {
            $this->acquiretimeout = (int)$CFG->session_redis_acquire_lock_timeout;
        }

        if (isset($CFG->session_redis_acquire_lock_warn)) {
            $this->acquirewarn = (int)$CFG->session_redis_acquire_lock_warn;
        }

        if (isset($CFG->session_redis_acquire_lock_retry)) {
            $this->lockretry = (int)$CFG->session_redis_acquire_lock_retry;
        }

        if (!empty($CFG->session_redis_serializer_use_igbinary) && defined('\Redis::SERIALIZER_IGBINARY')) {
            $this->serializer = \Redis::SERIALIZER_IGBINARY; // Set igbinary serializer if phpredis supports it.
        }

        // The following configures the session lifetime in redis to allow some
        // wriggle room in the user noticing they've been booted off and
        // letting them log back in before they lose their session entirely.
        $updatefreq = empty($CFG->session_update_timemodified_frequency) ? 20 : $CFG->session_update_timemodified_frequency;
        $this->timeout = $CFG->sessiontimeout + $updatefreq + MINSECS;

        // This sets the Redis session lock expiry time to whatever is lower, either
        // the PHP execution time `max_execution_time`, if the value is positive, or the
        // globally configured `sessiontimeout`.
        //
        // Setting it to the lower of the two will not make things worse it if the execution timeout
        // is longer than the session timeout.
        //
        // For the PHP execution time, once the PHP execution time is over, we can be sure
        // that the lock is no longer actively held so that the lock can expire safely.
        //
        // Although at `lib/classes/php_time_limit.php::raise(int)`, Moodle can
        // progressively increase the maximum PHP execution time, this is limited to the
        // `max_execution_time` value defined in the `php.ini`.
        // For the session timeout, we assume it is safe to consider the lock to expire
        // once the session itself expires.
        // If we unnecessarily hold the lock any longer, it blocks other session requests.
        $this->lockexpire = ini_get('max_execution_time');
        if ($this->lockexpire < 0) {
            // If the max_execution_time is set to a value lower than 0, which is invalid, use the default value.
            // https://www.php.net/manual/en/info.configuration.php#ini.max-execution-time defines the default as 30.
            // Note: This value is not available programatically.
            $this->lockexpire = 30;
        }

        if (empty($this->lockexpire) || ($this->lockexpire > (int)$CFG->sessiontimeout)) {
            // The value of the max_execution_time is either unlimited (0), or higher than the session timeout.
            // Cap it at the session timeout.
            $this->lockexpire = (int)$CFG->sessiontimeout;
        }

        if (isset($CFG->session_redis_lock_expire)) {
            $this->lockexpire = (int)$CFG->session_redis_lock_expire;
        }

        if (isset($CFG->session_redis_compressor)) {
            $this->compressor = $CFG->session_redis_compressor;
        }

        if (isset($CFG->session_redis_connection_timeout)) {
            $this->connectiontimeout = (int)$CFG->session_redis_connection_timeout;
        }

        if (isset($CFG->session_redis_max_retries)) {
            $this->maxretries = (int)$CFG->session_redis_max_retries;
        }
    }

    /**
     * Start the session.
     *
     * @return bool success
     */
    public function start() {
        $result = parent::start();

        return $result;
    }

    /**
     * Init session handler.
     */
    public function init() {
        if (!extension_loaded('redis')) {
            throw new exception('sessionhandlerproblem', 'error', '', null, 'redis extension is not loaded');
        }

        if (empty($this->host)) {
            throw new exception('sessionhandlerproblem', 'error', '', null,
                '$CFG->session_redis_host must be specified in config.php');
        }

        // The session handler requires a version of PHP Redis extension with support for SET command options (at least 2.2.4).
        $version = phpversion('Redis');
        if (!$version || version_compare($version, self::REDIS_EXTENSION_MIN_VERSION) <= 0) {
            throw new exception('sessionhandlerproblem', 'error', '', null,
                'redis extension version must be at least ' . self::REDIS_EXTENSION_MIN_VERSION);
        }

        $result = session_set_save_handler($this);
        if (!$result) {
            throw new exception('redissessionhandlerproblem', 'error');
        }

        $encrypt = (bool) ($this->sslopts ?? false);
        // Set Redis server(s).
        $trimmedservers = [];
        foreach ($this->host as $host) {
            $server = strtolower(trim($host));
            if (!empty($server)) {
                if ($server[0] === '/' || str_starts_with($server, 'unix://')) {
                    $port = 0;
                    $trimmedservers[] = $server;
                } else {
                    $port = $this->port ?? 6379; // No Unix socket so set default port.
                    if (strpos($server, ':')) { // Check for custom port.
                        list($server, $port) = explode(':', $server);
                    }
                    $trimmedservers[] = $server.':'.$port;
                }

                // We only need the first record for the single redis.
                if (!$this->clustermode) {
                    // Handle the case when the server is not a Unix domain socket.
                    if ($port !== 0) {
                        list($server, ) = explode(':', $trimmedservers[0]);
                    } else {
                        $server = $trimmedservers[0];
                    }
                    break;
                }
            }
        }

        // TLS/SSL Configuration.
        $opts = [];
        if ($encrypt) {
            if ($this->clustermode) {
                $opts = $this->sslopts;
            } else {
                // For a single (non-cluster) Redis, the TLS/SSL config must be added to the 'stream' key.
                $opts['stream'] = $this->sslopts;
            }
        }

        // Add retries for connections to make sure it goes through.
        $counter = 1;
        $exceptionclass = $this->clustermode ? 'RedisClusterException' : 'RedisException';
        while ($counter <= $this->maxretries) {
            $this->connection = null;
            // Make a connection to Redis server(s).
            try {
                // Create a $redis object of a RedisCluster or Redis class.
                if ($this->clustermode) {
                    $this->connection = new \RedisCluster(
                        null,
                        $trimmedservers,
                        $this->connectiontimeout, // Timeout.
                        $this->connectiontimeout, // Read timeout.
                        true,
                        $this->auth,
                        !empty($opts) ? $opts : null,
                    );
                } else {
                    $delay = rand(100, 500);
                    $this->connection = new \Redis();
                    $this->connection->connect(
                        $server,
                        $port,
                        $this->connectiontimeout, // Timeout.
                        null,
                        $delay, // Retry interval.
                        $this->connectiontimeout, // Read timeout.
                        $opts,
                    );
                    if ($this->auth !== '' && !$this->connection->auth($this->auth)) {
                        throw new $exceptionclass('Unable to authenticate.');
                    }
                }

                if (!$this->connection->setOption(\Redis::OPT_SERIALIZER, $this->serializer)) {
                    throw new $exceptionclass('Unable to set the Redis PHP Serializer option.');
                }
                if ($this->prefix !== '') {
                    // Use custom prefix on sessions.
                    if (!$this->connection->setOption(\Redis::OPT_PREFIX, $this->prefix)) {
                        throw new $exceptionclass('Unable to set the Redis Prefix option.');
                    }
                }
                if ($this->sslopts && !$this->connection->ping('Ping')) {
                    // In case of a TLS connection,
                    // if phpredis client does not communicate immediately with the server the connection hangs.
                    // See https://github.com/phpredis/phpredis/issues/2332.
                    throw new $exceptionclass("Ping failed");
                }
                if ($this->database !== 0) {
                    if (!$this->connection->select($this->database)) {
                        throw new $exceptionclass('Unable to select the Redis database ' . $this->database . '.');
                    }
                }

                // The session handler requires a version of Redis server with support for SET command options (at least 2.6.12).
                $serverversion = $this->connection->info('server')['redis_version'];
                if (version_compare($serverversion, self::REDIS_SERVER_MIN_VERSION) <= 0) {
                    throw new exception('sessionhandlerproblem', 'error', '', null,
                        'redis server version must be at least ' . self::REDIS_SERVER_MIN_VERSION);
                }
                return true;
            } catch (RedisException | RedisClusterException $e) {
                $redishost = $this->clustermode ? implode(',', $this->host) : $server. ':'. $port;
                $logstring = "Failed to connect (try {$counter} out of " . $this->maxretries . ") to Redis ";
                $logstring .= "at ". $redishost .", the error returned was: {$e->getMessage()}";
                debugging($logstring);
            }
            $counter++;
            // Introduce a random sleep between 100ms and 500ms.
            usleep(rand(100000, 500000));
        }

        if (isset($logstring)) {
            // We have exhausted our retries; it's time to give up.
            throw new $exceptionclass($logstring);
        }

        $result = session_set_save_handler($this);
        if (!$result) {
            throw new exception('redissessionhandlerproblem', 'error');
        }
    }

    /**
     * Update our session search path to include session name when opened.
     *
     * @param string $path  unused session save path. (ignored)
     * @param string $name Session name for this session. (ignored)
     * @return bool true always as we will succeed.
     */
    public function open(string $path, string $name): bool {
        return true;
    }

    /**
     * Close the session completely. We also remove all locks we may have obtained that aren't expired.
     *
     * @return bool true on success.  false on unable to unlock sessions.
     */
    public function close(): bool {
        $this->lasthash = null;
        try {
            foreach ($this->locks as $id => $expirytime) {
                if ($expirytime > $this->time()) {
                    $this->unlock_session($id);
                }
                unset($this->locks[$id]);
            }
        } catch (RedisException | RedisClusterException $e) {
            error_log('Failed talking to redis: '.$e->getMessage());
            return false;
        }

        return true;
    }

    /**
     * Read the session data from storage
     *
     * @param string $id The session id to read from storage.
     * @return string The session data for PHP to process.
     *
     * @throws RedisException when we are unable to talk to the Redis server.
     */
    public function read(string $id): string|false {
        try {
            if ($this->requires_write_lock()) {
                $this->lock_session($id);
            }
            $sessiondata = $this->uncompress($this->connection->get($id));

            if ($sessiondata === false) {
                if ($this->requires_write_lock()) {
                    $this->unlock_session($id);
                }
                $this->lasthash = sha1('');
                return '';
            }
            $this->connection->expire($id, $this->timeout);
        } catch (RedisException | RedisClusterException $e) {
            error_log('Failed talking to redis: '.$e->getMessage());
            throw $e;
        }
        $this->lasthash = sha1(base64_encode($sessiondata));
        return $sessiondata;
    }

    /**
     * Compresses session data.
     *
     * @param mixed $value
     * @return string
     */
    private function compress($value) {
        switch ($this->compressor) {
            case self::COMPRESSION_NONE:
                return $value;
            case self::COMPRESSION_GZIP:
                return gzencode($value);
            case self::COMPRESSION_ZSTD:
                return zstd_compress($value);
            default:
                debugging("Invalid compressor: {$this->compressor}");
                return $value;
        }
    }

    /**
     * Uncompresses session data.
     *
     * @param string $value
     * @return mixed
     */
    private function uncompress($value) {
        if ($value === false) {
            return false;
        }

        switch ($this->compressor) {
            case self::COMPRESSION_NONE:
                break;
            case self::COMPRESSION_GZIP:
                $value = gzdecode($value);
                break;
            case self::COMPRESSION_ZSTD:
                $value = zstd_uncompress($value);
                break;
            default:
                debugging("Invalid compressor: {$this->compressor}");
        }

        return $value;
    }

    /**
     * Write the serialized session data to our session store.
     *
     * @param string $id session id to write.
     * @param string $data session data
     * @return bool true on write success, false on failure
     */
    public function write(string $id, string $data): bool {

        $hash = sha1(base64_encode($data));

        // If the content has not changed don't bother writing.
        if ($hash === $this->lasthash) {
            return true;
        }

        if (is_null($this->connection)) {
            // The session has already been closed, don't attempt another write.
            error_log('Tried to write session: '.$id.' before open or after close.');
            return false;
        }

        // We do not do locking here because memcached doesn't.  Also
        // PHP does open, read, destroy, write, close. When a session doesn't exist.
        // There can be race conditions on new sessions racing each other but we can
        // address that in the future.
        try {
            $data = $this->compress($data);

            $this->connection->setex($id, $this->timeout, $data);
        } catch (RedisException | RedisClusterException $e) {
            error_log('Failed talking to redis: '.$e->getMessage());
            return false;
        }
        return true;
    }

    /**
     * Handle destroying a session.
     *
     * @param string $id the session id to destroy.
     * @return bool true if the session was deleted, false otherwise.
     */
    public function destroy(string $id): bool {
        $this->lasthash = null;
        try {
            $this->connection->del($id);
            $this->unlock_session($id);
        } catch (RedisException | RedisClusterException $e) {
            error_log('Failed talking to redis: '.$e->getMessage());
            return false;
        }

        return true;
    }

    /**
     * Garbage collect sessions.  We don't we any as Redis does it for us.
     *
     * @param integer $max_lifetime All sessions older than this should be removed.
     * @return bool true, as Redis handles expiry for us.
     */
    // phpcs:ignore moodle.NamingConventions.ValidVariableName.VariableNameUnderscore
    public function gc(int $max_lifetime): int|false {
        return false;
    }

    /**
     * Unlock a session.
     *
     * @param string $id Session id to be unlocked.
     */
    protected function unlock_session($id) {
        if (isset($this->locks[$id])) {
            $this->connection->del($id.".lock");
            unset($this->locks[$id]);
        }
    }

    /**
     * Obtain a session lock so we are the only one using it at the moment.
     *
     * @param string $id The session id to lock.
     * @return bool true when session was locked, exception otherwise.
     * @throws exception When we are unable to obtain a session lock.
     */
    protected function lock_session($id) {
        $lockkey = $id.".lock";

        $haslock = isset($this->locks[$id]) && $this->time() < $this->locks[$id];
        $startlocktime = $this->time();

        /* To be able to ensure sessions don't write out of order we must obtain an exclusive lock
         * on the session for the entire time it is open.  If another AJAX call, or page is using
         * the session then we just wait until it finishes before we can open the session.
         */

        // Store the current host, process id and the request URI so it's easy to track who has the lock.
        $hostname = gethostname();
        if ($hostname === false) {
            $hostname = 'UNKNOWN HOST';
        }
        $pid = getmypid();
        if ($pid === false) {
            $pid = 'UNKNOWN';
        }
        $uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : 'unknown uri';

        $whoami = "[pid {$pid}] {$hostname}:$uri";

        $haswarned = false; // Have we logged a lock warning?

        while (!$haslock) {
            $haslock = $this->connection->set($lockkey, $whoami, ['nx', 'ex' => $this->lockexpire]);

            if ($haslock) {
                $this->locks[$id] = $this->time() + $this->lockexpire;
                return true;
            }

            if (!empty($this->acquirewarn) && !$haswarned && $this->time() > $startlocktime + $this->acquirewarn) {
                // This is a warning to better inform users.
                $whohaslock = $this->connection->get($lockkey);
                // phpcs:ignore
                error_log("Warning: Cannot obtain session lock for sid: $id within $this->acquirewarn seconds but will keep trying. " .
                    "It is likely another page ($whohaslock) has a long session lock, or the session lock was never released.");
                $haswarned = true;
            }

            if ($this->time() > $startlocktime + $this->acquiretimeout) {
                // This is a fatal error, better inform users.
                // It should not happen very often - all pages that need long time to execute
                // should close session immediately after access control checks.
                $whohaslock = $this->connection->get($lockkey);
                // phpcs:ignore
                error_log("Error: Cannot obtain session lock for sid: $id within $this->acquiretimeout seconds. " .
                    "It is likely another page ($whohaslock) has a long session lock, or the session lock was never released.");
                $acquiretimeout = format_time($this->acquiretimeout);
                $lockexpire = format_time($this->lockexpire);
                $a = (object)[
                    'id' => substr($id, 0, 10),
                    'acquiretimeout' => $acquiretimeout,
                    'whohaslock' => $whohaslock,
                    'lockexpire' => $lockexpire];
                throw new exception("sessioncannotobtainlock", 'error', '', $a);
            }

            if ($this->time() < $startlocktime + 5) {
                // We want a random delay to stagger the polling load. Ideally
                // this delay should be a fraction of the average response
                // time. If it is too small we will poll too much and if it is
                // too large we will waste time waiting for no reason. 100ms is
                // the default starting point.
                $delay = rand($this->lockretry, (int)($this->lockretry * 1.1));
            } else {
                // If we don't get a lock within 5 seconds then there must be a
                // very long lived process holding the lock so throttle back to
                // just polling roughly once a second.
                $delay = rand(1000, 1100);
            }

            usleep($delay * 1000);
        }
    }

    /**
     * Return the current time.
     *
     * @return int the current time as a unixtimestamp.
     */
    protected function time() {
        return time();
    }

    /**
     * Check the backend contains data for this session id.
     *
     * Note: this is intended to be called from manager::session_exists() only.
     *
     * @param string $sid
     * @return bool true if session found.
     */
    public function session_exists($sid) {
        if (!$this->connection) {
            return false;
        }

        try {
            return !empty($this->connection->exists($sid));
        } catch (RedisException | RedisClusterException $e) {
            return false;
        }
    }

    /**
     * Kill all active sessions, the core sessions table is purged afterwards.
     */
    public function kill_all_sessions() {
        global $DB;
        if (!$this->connection) {
            return;
        }

        $rs = $DB->get_recordset('sessions', array(), 'id DESC', 'id, sid');
        foreach ($rs as $record) {
            $this->destroy($record->sid);
        }
        $rs->close();
    }

    /**
     * Kill one session, the session record is removed afterwards.
     *
     * @param string $sid
     */
    public function kill_session($sid) {
        if (!$this->connection) {
            return;
        }

        $this->destroy($sid);
    }
}
