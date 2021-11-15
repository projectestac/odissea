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
 * Strings for component 'tool_uploaduser', language 'pt', version '3.11'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Permitir apagar';
$string['allowrenames'] = 'Pemitir renomear';
$string['allowsuspends'] = 'Permitir suspender e ativar contas';
$string['assignedsysrole'] = 'Atribuído o papel de sistema {$a}';
$string['clidefault'] = 'Predefinição:';
$string['clierrorargument'] = 'O valor para o argumento -- {$a->name} não é válido. Valores permitidos: {$a->values}';
$string['clifile'] = 'Caminho para o ficheiro CSV com os dados do utilizador. Obrigatório.';
$string['clifilenotreadable'] = 'O ficheiro {$a} não existe ou não é legível';
$string['clihelp'] = 'Imprimir esta ajuda.';
$string['climissingargument'] = 'Argumento -- {$a} é obrigatório';
$string['clititle'] = 'Linha de comando da ferramenta de carregamento do utilizador.';
$string['clivalidationerror'] = 'Erro de validação:';
$string['csvdelimiter'] = 'Delimitador CSV';
$string['defaultvalues'] = 'Valores predefinidos';
$string['deleteerrors'] = 'Apagar erros';
$string['encoding'] = 'Codificação';
$string['errormnetadd'] = 'Não é possível adicionar utilizadores remotos';
$string['errorprefix'] = 'Erro:';
$string['errors'] = 'Erros';
$string['examplecsv'] = 'Ficheiro de texto de exemplo';
$string['examplecsv_help'] = 'Para usar o ficheiro de texto de exemplo, descarregue-o e abra-o com um editor de texto ou folha de cálculo. Deixe a primeira linha inalterada, edite as seguintes linhas (registos) e adicione os dados do utilizador, adicionando mais linhas conforme necessário. Guarde o ficheiro como CSV e carregue-o.

O ficheiro de texto de exemplo também pode ser usado para teste, uma vez que pode visualizar os dados do utilizador e optar por cancelar a ação antes da criação de contas de utilizador.';
$string['infoprefix'] = 'Informação:';
$string['invalidtheme'] = 'O tema "{$a}" não está instalado e será ignorado.';
$string['invalidupdatetype'] = 'Não pode selecionar esta opção com o \'Tipo de carregamento\' escolhido.';
$string['invaliduserdata'] = 'Foram detetados dados inválidos para o utilizador {$a} que foram apagados automaticamente.';
$string['linex'] = 'Linha {$a}';
$string['nochanges'] = 'Sem alterações';
$string['notheme'] = 'Nenhum tema está definido para este utilizador.';
$string['pluginname'] = 'Carregar utilizador';
$string['privacy:metadata'] = 'O módulo Carregar utilizador não armazena quaisquer dados pessoais.';
$string['renameerrors'] = 'Renomear erros';
$string['requiredtemplate'] = 'Obrigatório. Pode usar a sintaxe modelo (%l = lastname, %f = firstname, %u = username). Consulte a ajuda para mais detalhes e exemplos.';
$string['rowpreviewnum'] = 'Número de linhas a pré-visualizar';
$string['unassignedsysrole'] = 'Retirado o papel de sistema {$a}';
$string['uploadpicture_baduserfield'] = 'O atributo do utilizador não é válido. Por favor, tente novamente.';
$string['uploadpicture_cannotmovezip'] = 'Não é possível mover o ficheiro zip para a pasta temporária.';
$string['uploadpicture_cannotprocessdir'] = 'Não é possível processar ficheiros descompactados.';
$string['uploadpicture_cannotsave'] = 'Não é possível guardar a imagem para o utilizador {$a}. Verifique o ficheiro da imagem original.';
$string['uploadpicture_cannotunzip'] = 'Não é possível descompactar ficheiro de imagens.';
$string['uploadpicture_invalidfilename'] = 'O nome do ficheiro da imagem {$a} tem caracteres inválidos. A ignorar.';
$string['uploadpicture_overwrite'] = 'Substituir as imagens existentes dos utilizadores?';
$string['uploadpicture_userfield'] = 'Informação do utilizador que identifica a imagem';
$string['uploadpicture_usernotfound'] = 'Não existe o utilizador com o valor \'{$a->uservalue}\' no campo \'{$a->userfield}\'. A ignorar.';
$string['uploadpicture_userskipped'] = 'A ignorar utilizador {$a} (já tem imagem).';
$string['uploadpicture_userupdated'] = 'Imagem atualizada para o utilizador {$a}.';
$string['uploadpictures'] = 'Carregar imagens de utilizador';
$string['uploadpictures_help'] = 'As imagens dos utilizadores podem ser carregadas como um ficheiro zip ou um ficheiro de imagem. Os ficheiros de imagem devem ser nomeados com nome-de-utilizador.extensão.<br>Por exemplo, o ficheiro "user1234.jpg" para o utilizador com o nome de utilizador user1234.';
$string['uploaduser:uploaduserpictures'] = 'Carregar imagens de utilizador';
$string['uploadusers'] = 'Carregar utilizadores';
$string['uploadusers_help'] = 'Os utilizadores podem ser carregados (e opcionalmente inscritos nas disciplinas) através de ficheiro de texto. O ficheiro deve ter o seguinte formato:

* Cada linha do ficheiro contém um registo
* Cada registo é uma linha com dados separados por vírgulas (ou outro delimitador)
* A primeira linha contém a lista dos nomes dos campos que define o formato do ficheiro
* Os nomes dos campos obrigatórios são: username, password, firstname, lastname, email';
$string['uploaduserspreview'] = 'Pré-visualizar os utilizadores carregados';
$string['uploadusersresult'] = 'Resultados dos utilizadores carregados';
$string['useraccountupdated'] = 'Utilizador atualizado';
$string['useraccountuptodate'] = 'Sem alterações';
$string['userdeleted'] = 'Utilizador apagados';
$string['userrenamed'] = 'Utilizador renomeados';
$string['userscreated'] = 'Utilizadores criados';
$string['usersdeleted'] = 'Utilizadores apagados';
$string['usersrenamed'] = 'Utilizadores renomeados';
$string['usersskipped'] = 'Utilizadores ignorados';
$string['usersupdated'] = 'Utilizadores atualizados';
$string['usersweakpassword'] = 'Utilizadores com senha fraca';
$string['userthemesnotallowed'] = 'A escolha do tema pelo utilizador não está ativada, por isso, qualquer utilizador incluído no ficheiro de carregamento de utilizadores será ignorado.';
$string['uubulk'] = 'Selecione para executar operações de utilizador em massa';
$string['uubulkall'] = 'Todos os utilizadores';
$string['uubulknew'] = 'Novos utilizadores';
$string['uubulkupdated'] = 'Utilizadores atualizados';
$string['uucsvline'] = 'Linha CSV';
$string['uulegacy1role'] = '(Aluno original) tipoN=1';
$string['uulegacy2role'] = '(Professor original) tipoN=2';
$string['uulegacy3role'] = '(Professor-não-editor original) tipoN=3';
$string['uunoemailduplicates'] = 'Impedir e-mails duplicados';
$string['uuoptype'] = 'Tipo de carregamento';
$string['uuoptype_addinc'] = 'Adicionar todos, acrescentar número à direita do nome de utilizador';
$string['uuoptype_addnew'] = 'Adicionar apenas novos, ignorar existentes';
$string['uuoptype_addupdate'] = 'Adicionar novos e atualizar existentes';
$string['uuoptype_update'] = 'Atualizar apenas os existentes';
$string['uupasswordcron'] = 'Gerada no cron';
$string['uupasswordnew'] = 'Nova senha';
$string['uupasswordold'] = 'Senha atual';
$string['uustandardusernames'] = 'Uniformizar nomes de utilizador';
$string['uuupdateall'] = 'Substituir pelo ficheiro e predefinidos';
$string['uuupdatefromfile'] = 'Substituir pelo ficheiro';
$string['uuupdatemissing'] = 'Preencher o que está em falta com o ficheiro e predefinidos';
$string['uuupdatetype'] = 'Detalhes do utilizador existente';
$string['uuusernametemplate'] = 'Modelo do nome de utilizador';
$string['warningprefix'] = 'Aviso:';
