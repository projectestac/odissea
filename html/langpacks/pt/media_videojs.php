<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'media_videojs', language 'pt', version '3.11'.
 *
 * @package     media_videojs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['audiocssclass'] = 'Classe CSS para áudio';
$string['audioextensions'] = 'Extensões de ficheiros de áudio';
$string['configaudiocssclass'] = 'Uma classe CSS que será adicionada ao elemento <audio>.';
$string['configaudioextensions'] = 'Uma lista de extensões de ficheiros de áudio suportadas, separados por vírgulas. O VideoJS tentará usar o leitor de vídeo nativo do navegador quando estiver disponível ou a funcionalidade VideoJS nativa, e retornará a um Leitor Flash para outros formatos se o Flash for suportado pelo navegador e o Flash fallback estiver ativado abaixo.';
$string['configlimitsize'] = 'Se ativar esta opção, e se a largura e altura não forem especificadas, o vídeo será exibido com a largura e a altura predefinidas. Caso contrário, irá esticar até à largura máxima possível.';
$string['configrtmp'] = 'Se ativar esta opção, as hiperligações que começam com rtmp:// serão manipulados pelo módulo, independentemente se a extensão estiver ativada, ou não, na configuração das extensões do ficheiro de vídeo (videoextensions). O fallback do Flash deve estar ativado para que o RTMP funcione.';
$string['configuseflash'] = 'Utilizar o leitor de Flash se o formato de vídeo não for suportado nativamente pelo navegador e/ou nativamente pelo leitor VideoJS. Se ativar esta opção, o VideoJS será usado para qualquer extensão de ficheiro da lista acima sem verificação do navegador. Tenha em atenção que o Flash não está disponível nos navegadores de dispositivos móveis e é desaconselhado em muitos computadores.';
$string['configvideocssclass'] = 'Uma classe CSS que será adicionada ao elemento <video>. Por exemplo, a classe CSS "vjs-big-play-centered" irá colocar o botão de reprodução no meio. Para obter mais detalhes, incluindo como definir uma aparência personalizada, consulte docs.videojs.com.';
$string['configvideoextensions'] = 'Uma lista de extensões de ficheiros de vídeo suportados, separados por vírgulas. O VideoJS tentará usar o leitor de vídeo nativo do navegador, se estiver disponível, e retornará a um Leitor Flash para outros formatos se o Flash for suportado pelo navegador e o Flash fallback estiver ativado abaixo.';
$string['configyoutube'] = 'Utilizar VideoJS para reproduzir vídeos do YouTube. Tenha em atenção que as listas de reprodução do YouTube ainda não são suportadas pelo VideoJS.';
$string['limitsize'] = 'Tamanho limite';
$string['pluginname'] = 'Leitor VideoJS';
$string['pluginname_help'] = 'Um invólucro de JavaScript para ficheiros de vídeo reproduzidos pelo leitor de vídeo nativo do navegador com leitor de Flash fallback. (O suporte de formatos depende do navegador.)';
$string['privacy:metadata'] = 'O módulo Leitor VideoJS de multimédia não armazena quaisquer dados pessoais.';
$string['rtmp'] = 'Fluxos RTMP';
$string['useflash'] = 'Usar Flash fallback';
$string['videocssclass'] = 'Classe CSS para vídeo';
$string['videoextensions'] = 'Extensões de ficheiros de vídeo';
$string['youtube'] = 'Vídeos do YouTube';
