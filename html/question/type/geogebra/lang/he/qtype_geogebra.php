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
 * Strings for component 'qtype_geogebra'
 *
 * @package        qtype_geogebra
 * @author         Christoph Stadlbauer <christoph.stadlbauer@geogebra.org>
 * @copyright  (c) International GeoGebra Institute 2014
 * @license        http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$string['pluginname'] = 'GeoGebra';
$string['pluginname_link'] = 'question/type/geogebra';$string['addconstraints'] = 'הוסיפי אילוצים (תנאים) למשתנים.';
$string['addmorevarblanks'] = 'מקומות פנויים לעוד {no} משתנה/ים';
$string['answerinvalid'] = 'מחרוזת התשובה בתגובה אינה חוקית. זה לא צריך לקרות.';
$string['answermissing'] = 'התשובה בתגובה חסרה. כנאה JavaScript לא מופעל בדפדפן או שקרתה שגיאה לא ידועה.';
$string['answervar'] = 'משתנים לציון אוטומטי.';
$string['answervar_help'] = 'לציון אוטומטי: שם של עצם בוליאני בגאוגברה שערכו true כאשר התלמיד פתר את השאלה (חלקית). סוכם את כל הציונים לכל המשתנים הבוליאניים. השאלה נכונה אם יש צירוף העובר את ה-100%, אך צריך להיות צירוף הנסכם ל-100% בדיוק. השאירי ריק לציון ידני.';
$string['applet_advanced_settings'] = 'הגדרות מתקדמות...';
$string['constraints'] = 'אילוצים (תנאים)‏';
$string['constraints_help'] = 'האם יש אילוצים כלשהם על המשתנים כגון ‏a < b‏, אשר לא יכלו להיות מוגדרים בעזרת אפשרויות סרגל הגרירה? רשימה מופרדת בפסיקים. יחסים נתמכים: <, <=, >, >=. אם יש לך צורך בשוויון עליך להשתמש באותם משתנים בעת יצירת גליון הגאוגברה. טווחים דינמיים, כלומר שימוש במשתנים לקביעת מינימום ומקסימום של סרגל הגרירה, לא נתמכים.';
$string['constraintswrongortoohard'] = '‏‎{$a->inequalities}‎‏ שגויים או קשים מדי להשגה. ניסינו {$a->tries} פעמים ב-{$a->time} שניות. אולי נשתמש בשיטות טובות יותר בעתיד...';
$string['dragndrop'] = 'גררי קובץ גאוגברה לכל מקום באזור יישמון גאוגברה.';
$string['enable_label_drags'] = 'אפשר גרירת תוויות';
$string['enable_right_click'] = 'אפשר כפתור עכבר ימני ועריכה בעזרת המקלדת';
$string['enable_shift_drag_zoom'] = 'אפשר גרירה עם shift וזום';
$string['feedback'] = 'משוב כשהערך הוא true‏';
$string['feedback_help'] = 'המשוב נלקח באופן אוטומטי מההערה במשתנה בקובץ הגאוגברה.';
$string['geogebraapplet'] = 'יישומון גאוגברה';
$string['getvars'] = 'קבל מהיישומון משתנה שערכו יכול להיות מוגרל.';
$string['ggbfilemissing'] = 'מחרוזת base64‏ חסרה בתגובה. כנראה JavaScript מכובה או קרתה שגיאת דפדפן כלשהי.';
$string['ggbturl'] = 'כתובת רשת או מספר זהות לגליון GeoGebra‏';
$string['ggbturl_help'] = 'את יכולה להשתמש בכפתור השיתוף ב-GeoGebra ולהעתיק ולהדביק את הקישור, או להשתמש במאגר GeoGebra‏. היישומון והפרמטרים באוכסנים בבסיס הנתונים. היישומון לא יועלה שוב מ-GeoGebra אלא אם יתבקש. ניתן גם רק לספק את ה-ID או מפתח השיתוף של היישומון.';
$string['ggbxmlmissing'] = 'חסרה מחרוזת ה-XML בתגובה. כנראה JavaScript מכובה או שאראה שגיאה כלשהי.';
$string['invalidinequality'] = '‏{$a} אינו חוקי';
$string['isexercise'] = 'השתמשי ב GeoGebra-Exercise לבדיקת שאלות';
$string['isexercise_help'] = 'היישומון מכיל כלים להגדרת המשתמש לבדיקה אוטומטית של התקגיל.\nשימי לב: כל התשובות למטה אינן מתאימות במקרה זה!';
$string['israndomized'] = 'האם יש משתנים שיש להגריל את ערכם?';
$string['loadapplet'] = 'טען (מחדש) להציג את היישומון';
$string['loadapplet_help'] = 'טען (מחדש) את היישומון מ-GeoGebra ואחסן את הגסה החדשה מ-GeoGebra בבסיס הנתונים.';
$string['mineqmax'] = 'תכונות Min ו-Max להגרלה אינן מצוינות כהלכה למשתנה {$a}‏, או שלא ציינת את המינימום והמקסימום של סרגל הגרירה, או שהעצם כלל אינו סרגל גרירה. כנראה שעליך לתקן זאת בקובץ הגאוגברה שלך.';
$string['minplusstepgtmax'] = 'סכום המינימום והצעד גדול מהמקסימום עבור משתנה {$a}‏. כנראה שעליך לתקן את קובץ הגאוגברה שלך.';
$string['noappletloaded'] = 'אף יישומון לא נטען! בדקי אם כתובת הרשת נכונה, ואם את רואה יישומון לאחר בחירת קישור או העלאה מחדש של היישומון.';
$string['nofractionsumeq1'] = 'לפחות צרוף אחד של הציונים צריך להסכם ל-100%‎‏';
$string['pluginname_help'] = 'שאלות כאשר התלמיד יכול לפתור את השאלות בעזרת גאוגברה';
$string['pluginnameadding'] = 'הוספת שאלת גאוגברה';
$string['pluginnameediting'] = 'עריכת שאלת גאוגברה';
$string['pluginnamesummary'] = 'גירסה של שאלות מחושבות המשתמשת בגאוגברה להראות את השאלה ולאמת את התשובה כאשר התלמיד עובד על החידון.';
$string['randomizedbutnovars'] = 'בחרת כי השאלה תהיה מוגרלת, אך לא ציינת אף משתנה חוקי להגרלה.';
$string['randomizedvar'] = 'משתנים שערכם יוגרל.';
$string['randomizedvar_help'] = 'משתנים שערכם יוגרל (מופרדים בפסיקים). השתמשי באפשרויות סרגל הגרירה בגאוגברה לקביעת מינימום, מקסימום וצעד. משתנים אלו יכולים לשמש גם בטקסט השאלה בתוך סוגריים מסולסלים, לדוגמה: {a}‏';
$string['show_algebra_input'] = 'הצגת סרגל קלט';
$string['show_menu_bar'] = 'הצגת תפריט';
$string['show_reset_icon'] = 'הצגת צלמית לאיתחול בניה';
$string['show_tool_bar'] = 'הצגת סרגל כלים';
$string['stepzero'] = 'הצעד הוא 0 למשתנה {$a}‏; או שלא ציינת את הצעד בסרגל הגרירה, או שהעצם כלל אינו סרגל גרירה. כנראה שעליך לתקן זאת בקובץ הגאוגברה.';
$string['useafile'] = '... או התמשי בקובץ ggb.‏';
$string['valuecheckedfor'] = 'עצם בוליאני בגאוגברה המשמש לבדיקת נכונות.';
$string['variablenamewrong'] = 'משתנה בשם זה לא נמצא בקובץ הגאוגברה.';
$string['variableno'] = 'משתנה {$a}‏';
$string['variables'] = 'משתנים';
$string['willbereadfromfile'] = 'יקרא מתוך גאוגברה... (ראי כפתור עזרה)‏';
