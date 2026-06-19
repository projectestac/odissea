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
 * AMD module for the CodeRunner question browser.
 *
 * Renders a filterable, sortable table of all CodeRunner questions in a
 * Moodle context, with per-question detail view, JSON/CSV export, and
 * an advanced filter builder.
 *
 * Initialised from questionbrowser.php via $PAGE->requires->js_call_amd().
 *
 * @module     qtype_coderunner/questionbrowser
 * @copyright  2025 Richard Lobb, The University of Canterbury
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define([], function() {

    /**
     * Initialise the question browser.
     * Data is passed via $PAGE->requires->data_for_js('qbrowserInitData', ...) in PHP.
     */
    const init = function() {
  const mainEl = document.getElementById('qbrowserMain');
  const initData = JSON.parse(mainEl.dataset.init);
  const rawData = initData.questions;
  const moodleBaseUrl = initData.moodlebaseurl;
  const strings = initData.strings;
  let viewData = rawData.slice();


  let currentSort = {field: null, direction: 'asc'};
  let currentlyOpenDetails = null;
  let advancedRules = [];
  let ruleIdCounter = 0;
  let columnWidths = {
    name: null,
    actions: 280,
    category: null,
    tags: 200,
    usedin: 200
  };

  // Elements.
  const kw = document.getElementById('kw');
  const kwMode = document.getElementById('kwMode');
  const kwField = document.getElementById('kwField');
  const kwType = document.getElementById('kwType');
  const numericFilters = document.getElementById('numericFilters');
  const categoricalFilters = document.getElementById('categoricalFilters');
  const applyBtn = document.getElementById('apply');
  const clearBtn = document.getElementById('clear');
  const listEl = document.getElementById('list');
  const countEl = document.getElementById('count');
  const exportJsonBtn = document.getElementById('exportJson');
  const exportCsvBtn = document.getElementById('exportCsv');
  const advancedToggle = document.getElementById('advancedToggle');
  const advancedContent = document.getElementById('advancedContent');
  const filterRulesEl = document.getElementById('filterRules');
  const addRuleBtn = document.getElementById('addRule');
  const activeFiltersChips = document.getElementById('activeFiltersChips');
  const qbrowserMain = document.getElementById('qbrowserMain');
  const filterPanel = document.getElementById('filterPanel');
  const mainResizer = document.getElementById('mainResizer');

  // Helpers.
  /**
   *
   * @param {*} x
   */
  function isNumber(x) {
 return typeof x === 'number' && Number.isFinite(x);
}

  /**
   *
   */
  function buildHeader() {
    const table = document.createElement('table');
    table.className = 'table table-striped table-hover table-sm';
    table.style.tableLayout = 'fixed';
    table.style.width = '100%';

    const colgroup = document.createElement('colgroup');
    const nameColDef = document.createElement('col');
    const actionsColDef = document.createElement('col');
    const categoryColDef = document.createElement('col');
    const tagsColDef = document.createElement('col');
    const usedinColDef = document.createElement('col');

    if (columnWidths.name) {
 nameColDef.style.width = columnWidths.name + 'px';
}
    actionsColDef.style.width = columnWidths.actions + 'px';
    if (columnWidths.category) {
 categoryColDef.style.width = columnWidths.category + 'px';
}
    if (columnWidths.tags) {
 tagsColDef.style.width = columnWidths.tags + 'px';
}
    if (columnWidths.usedin) {
 usedinColDef.style.width = columnWidths.usedin + 'px';
}

    colgroup.append(nameColDef, actionsColDef, categoryColDef, tagsColDef, usedinColDef);
    table.appendChild(colgroup);

    const thead = document.createElement('thead');
    thead.className = 'table-dark sticky-top';
    const headerRow = document.createElement('tr');

    const nameCol = document.createElement('th');
    nameCol.id = 'sortName';
    nameCol.style.cursor = 'pointer';
    nameCol.className = 'user-select-none';
    nameCol.style.position = 'relative';
    const nameText = document.createElement('span');
    nameText.textContent = strings.col_name;
    nameCol.appendChild(nameText);

    const actionsCol = document.createElement('th');
    actionsCol.style.position = 'relative';
    const actionsText = document.createElement('span');
    actionsText.textContent = strings.col_actions;
    actionsCol.appendChild(actionsText);

    const categoryCol = document.createElement('th');
    categoryCol.id = 'sortCategory';
    categoryCol.style.cursor = 'pointer';
    categoryCol.className = 'user-select-none';
    categoryCol.style.position = 'relative';
    const categoryText = document.createElement('span');
    categoryText.textContent = strings.col_category;
    categoryCol.appendChild(categoryText);

    const tagsCol = document.createElement('th');
    tagsCol.id = 'sortTags';
    tagsCol.style.cursor = 'pointer';
    tagsCol.className = 'user-select-none';
    tagsCol.style.position = 'relative';
    const tagsText = document.createElement('span');
    tagsText.textContent = strings.col_tags;
    tagsCol.appendChild(tagsText);

    const usedinCol = document.createElement('th');
    usedinCol.id = 'sortUsedIn';
    usedinCol.style.cursor = 'pointer';
    usedinCol.className = 'user-select-none';
    usedinCol.style.position = 'relative';
    const usedinText = document.createElement('span');
    usedinText.textContent = strings.col_usedin;
    usedinCol.appendChild(usedinText);

    // Add resizers to all columns except the last
    [nameCol, actionsCol, categoryCol, tagsCol].forEach((col, idx) => {
      const resizer = document.createElement('div');
      resizer.className = 'column-resizer';
      resizer.dataset.columnIndex = idx;

      // Stop propagation to prevent triggering sort on parent <th>
      resizer.addEventListener('click', (e) => {
        e.stopPropagation();
      });

      col.appendChild(resizer);
    });

    headerRow.appendChild(nameCol);
    headerRow.appendChild(actionsCol);
    headerRow.appendChild(categoryCol);
    headerRow.appendChild(tagsCol);
    headerRow.appendChild(usedinCol);

    thead.appendChild(headerRow);
    table.appendChild(thead);

    const tbody = document.createElement('tbody');
    table.appendChild(tbody);

    return table;
  }

  /**
   *
   * @param {Array} arr
   */
  function toCSV(arr) {
    if (!arr.length) {
 return "";
}
    const headers = Object.keys(arr[0]);
    const esc = v => {
      if (v === null || v === undefined) {
 return "";
}
      const s = typeof v === 'object' ? JSON.stringify(v) : String(v);
      return /[",\n]/.test(s) ? `"${s.replace(/"/g, '""')}"` : s;
    };
    return [headers.join(',')].concat(arr.map(o => headers.map(h => esc(o[h])).join(','))).join('\n');
  }

  /**
   *
   * @param {string} filename
   * @param {string} content
   * @param {string} mime
   */
  function download(filename, content, mime) {
    const blob = new Blob([content], {type: mime});
    const a = document.createElement('a');
    a.href = URL.createObjectURL(blob);
    a.download = filename;
    a.click();
    URL.revokeObjectURL(a.href);
  }

  /**
   *
   * @param {object} q
   */
  function summarizeRow(q) {
    const row = document.createElement('tr');

    const nameCell = document.createElement('td');
    nameCell.textContent = q.name ?? '';
    nameCell.className = 'text-truncate';
    nameCell.style.maxWidth = '300px';

    const actionsCell = document.createElement('td');
    actionsCell.className = 'qbrowser-controls';

    const questionBtn = document.createElement('button');
    questionBtn.className = 'btn btn-outline-secondary';
    questionBtn.style.cssText = 'padding: 2px 5px; font-size: 10px; margin-right: 1px; line-height: 1.2;';
    questionBtn.textContent = strings.btn_question;
    questionBtn.title = strings.tip_view_question;

    const answerBtn = document.createElement('button');
    answerBtn.className = 'btn btn-outline-secondary';
    answerBtn.style.cssText = 'padding: 2px 5px; font-size: 10px; margin-right: 1px; line-height: 1.2;';
    answerBtn.textContent = strings.btn_answer;
    answerBtn.title = strings.tip_view_answer;

    const previewBtn = document.createElement('button');
    previewBtn.className = 'btn btn-outline-secondary';
    previewBtn.style.cssText = 'padding: 2px 5px; font-size: 10px; margin-right: 1px; line-height: 1.2;';
    previewBtn.textContent = strings.btn_preview;
    previewBtn.title = strings.tip_preview_question;

    const bankBtn = document.createElement('button');
    bankBtn.className = 'btn btn-outline-secondary';
    bankBtn.style.cssText = 'padding: 2px 5px; font-size: 10px; margin-right: 1px; line-height: 1.2;';
    bankBtn.textContent = strings.btn_bank;
    bankBtn.title = strings.tip_view_in_bank;

    const jsonBtn = document.createElement('button');
    jsonBtn.className = 'btn btn-outline-secondary';
    jsonBtn.style.cssText = 'padding: 2px 5px; font-size: 10px; line-height: 1.2;';
    jsonBtn.textContent = strings.btn_json;
    jsonBtn.title = strings.tip_view_json;

    actionsCell.append(questionBtn, answerBtn, previewBtn, bankBtn, jsonBtn);

    const categoryCell = document.createElement('td');
    categoryCell.textContent = q.category ?? '';
    categoryCell.className = 'text-muted small text-truncate';
    categoryCell.style.maxWidth = '200px';

    const tagsCell = document.createElement('td');
    const tagText = Array.isArray(q.tags) && q.tags.length > 0 ? q.tags.join(', ') : '';
    tagsCell.textContent = tagText;
    tagsCell.className = 'text-muted small text-truncate';
    tagsCell.style.maxWidth = '200px';
    tagsCell.title = tagText;

    const usedinCell = document.createElement('td');
    const usedinArray = Array.isArray(q.usedin) ? q.usedin : [];
    usedinCell.className = 'text-muted small';
    usedinCell.style.maxWidth = '200px';

    // Create one div per quiz name, each with its own truncation
    if (usedinArray.length > 0) {
      usedinArray.forEach(quizname => {
        const quizDiv = document.createElement('div');
        quizDiv.textContent = quizname;
        quizDiv.className = 'text-truncate';
        quizDiv.title = quizname;
        usedinCell.appendChild(quizDiv);
      });
    }

    // Tooltip shows full list
    const usedinText = usedinArray.join('\n');
    usedinCell.title = usedinText;

    row.appendChild(nameCell);
    row.appendChild(actionsCell);
    row.appendChild(categoryCell);
    row.appendChild(tagsCell);
    row.appendChild(usedinCell);

    let openType = null;
    let detailRow = null;

    /**
     *
     */
    function closeDetails() {
      openType = null;
      questionBtn.textContent = strings.btn_question;
      answerBtn.textContent = strings.btn_answer;
      jsonBtn.textContent = strings.btn_json;
      questionBtn.classList.remove('qbrowser-btn-active');
      answerBtn.classList.remove('qbrowser-btn-active');
      jsonBtn.classList.remove('qbrowser-btn-active');
      if (detailRow) {
        detailRow.remove();
        detailRow = null;
      }
      if (currentlyOpenDetails === closeDetails) {
        currentlyOpenDetails = null;
      }
    }

    /**
     *
     * @param {string} type
     * @param {string} content
     * @param {boolean} isHTML
     */
    function toggleDisplay(type, content, isHTML = false) {
      if (openType === type) {
        closeDetails();
      } else {
        if (currentlyOpenDetails && currentlyOpenDetails !== closeDetails) {
          currentlyOpenDetails();
        }

        if (detailRow) {
          detailRow.remove();
        }

        openType = type;
        questionBtn.textContent = type === 'question' ? strings.btn_close : strings.btn_question;
        answerBtn.textContent = type === 'answer' ? strings.btn_close : strings.btn_answer;
        jsonBtn.textContent = type === 'json' ? strings.btn_close : strings.btn_json;

        questionBtn.classList.remove('qbrowser-btn-active');
        answerBtn.classList.remove('qbrowser-btn-active');
        jsonBtn.classList.remove('qbrowser-btn-active');

        if (type === 'question') {
 questionBtn.classList.add('qbrowser-btn-active');
} else if (type === 'answer') {
 answerBtn.classList.add('qbrowser-btn-active');
} else if (type === 'json') {
 jsonBtn.classList.add('qbrowser-btn-active');
}

        detailRow = document.createElement('tr');
        const detailCell = document.createElement('td');
        detailCell.colSpan = 5;

        const detail = document.createElement('div');
        detail.className = isHTML ? 'qbrowser-detail html-content' : 'qbrowser-detail code-content';
        if (isHTML) {
 detail.innerHTML = content;
} else {
 detail.textContent = content;
}

        detailCell.appendChild(detail);
        detailRow.appendChild(detailCell);

        row.insertAdjacentElement('afterend', detailRow);

        currentlyOpenDetails = closeDetails;
      }
    }

    jsonBtn.addEventListener('click', () => toggleDisplay('json', JSON.stringify(q, null, 2)));
    questionBtn.addEventListener('click', () => toggleDisplay('question', q.questiontext || strings.no_questiontext, true));
    answerBtn.addEventListener('click', () => toggleDisplay('answer', q.answer || strings.no_answer));

    previewBtn.addEventListener('click', () => {
      if (q.id) {
        const previewUrl = `${moodleBaseUrl}/question/bank/previewquestion/preview.php?id=${q.id}`;
        window.open(previewUrl, '_blank');
      } else {
        alert(strings.alert_no_id);
      }
    });

    bankBtn.addEventListener('click', () => {
      if (q.qbankparams) {
        const params = new URLSearchParams(q.qbankparams);
        const bankUrl = `${moodleBaseUrl}/question/edit.php?${params.toString()}`;
        window.open(bankUrl, '_blank');
      } else {
        alert(strings.alert_no_bank_params);
      }
    });

    return row;
  }

  /**
   *
   * @param {string} field
   */
  function sortBy(field) {
    if (currentSort.field === field) {
      currentSort.direction = currentSort.direction === 'asc' ? 'desc' : 'asc';
    } else {
      currentSort.field = field;
      currentSort.direction = 'asc';
    }

    viewData.sort((a, b) => {
      let aVal, bVal;
      if (field === 'tags' || field === 'usedin') {
        aVal = (Array.isArray(a[field]) ? a[field].join(', ') : '').toLowerCase();
        bVal = (Array.isArray(b[field]) ? b[field].join(', ') : '').toLowerCase();
      } else {
        aVal = (a[field] || '').toString().toLowerCase();
        bVal = (b[field] || '').toString().toLowerCase();
      }

      if (currentSort.direction === 'asc') {
        return aVal < bVal ? -1 : aVal > bVal ? 1 : 0;
      } else {
        return aVal > bVal ? -1 : aVal < bVal ? 1 : 0;
      }
    });

    renderList(viewData);
    updateHeaderSortIndicators();
  }

  /**
   *
   */
  function updateHeaderSortIndicators() {
    const sortName = document.getElementById('sortName');
    const sortCategory = document.getElementById('sortCategory');
    const sortTags = document.getElementById('sortTags');
    const sortUsedIn = document.getElementById('sortUsedIn');

    [sortName, sortCategory, sortTags, sortUsedIn].forEach(header => {
      if (!header) {
 return;
}
      let field;
      if (header.id === 'sortName') {
 field = 'name';
} else if (header.id === 'sortCategory') {
 field = 'category';
} else if (header.id === 'sortTags') {
 field = 'tags';
} else if (header.id === 'sortUsedIn') {
 field = 'usedin';
}

      // Find the span element that contains the text
      const span = header.querySelector('span');
      if (!span) {
 return;
}

      if (field === currentSort.field) {
        const arrow = currentSort.direction === 'asc' ? '↑' : '↓';
        span.textContent = span.textContent.replace(/[↕↑↓]/, arrow);
      } else {
        span.textContent = span.textContent.replace(/[↕↑↓]/, '↕');
      }
    });
  }

  /**
   *
   * @param {Array} data
   */
  function renderList(data) {
    listEl.innerHTML = '';

    if (data.length === 0) {
      const noMatch = document.createElement('div');
      noMatch.className = 'text-center p-4 text-muted';
      noMatch.textContent = strings.no_matches;
      listEl.appendChild(noMatch);
    } else {
      const table = buildHeader();
      const tbody = table.querySelector('tbody');

      data.forEach(q => {
        const row = summarizeRow(q);
        tbody.appendChild(row);
      });

      listEl.appendChild(table);
    }

    countEl.textContent = `${data.length.toLocaleString()} ${strings.shown} / ${rawData.length.toLocaleString()} ${strings.total}`;
    const hasData = data.length > 0;
    exportJsonBtn.disabled = !hasData;
    exportCsvBtn.disabled = !hasData;

    document.getElementById('sortName')?.addEventListener('click', () => sortBy('name'));
    document.getElementById('sortCategory')?.addEventListener('click', () => sortBy('category'));
    document.getElementById('sortTags')?.addEventListener('click', () => sortBy('tags'));
    document.getElementById('sortUsedIn')?.addEventListener('click', () => sortBy('usedin'));
  }

  /**
   *
   * @param {Array} data
   */
  function buildFilters(data) {
    kwField.innerHTML = '';
    const keys = Array.from(new Set(data.flatMap(obj => Object.keys(obj))));
    const optAny = document.createElement('option'); optAny.textContent = strings.any; kwField.appendChild(optAny);
    const excludedKeys = ['version', 'timemodified', 'type', 'courseid', 'lines_of_code'];
    keys.filter(k => !excludedKeys.includes(k)).forEach(k => {
      const o = document.createElement('option'); o.textContent = k; kwField.appendChild(o);
    });

    const numFields = keys.filter(k => {
      if (k === 'version' || k === 'timemodified') {
 return false;
}
      let n = 0,
t = 0;
      for (const o of data) {
 if (k in o) {
 t++; if (isNumber(o[k])) {
 n++;
}
}
}
      return t > 0 && n / t >= 0.8;
    });

    numericFilters.innerHTML = '';
    numFields.forEach(k => {
      const inputGroup = document.createElement('div');
      inputGroup.className = 'qbrowser-grid2';

      const min = document.createElement('input');
      min.type = 'number';
      min.placeholder = 'min';
      min.className = 'form-control form-control-sm';
      min.dataset.key = k;
      min.dataset.kind = 'min';

      const max = document.createElement('input');
      max.type = 'number';
      max.placeholder = 'max';
      max.className = 'form-control form-control-sm';
      max.dataset.key = k;
      max.dataset.kind = 'max';

      inputGroup.append(min, max);
      numericFilters.appendChild(inputGroup);
    });

    // Build the coderunnertype filter (the only categorical filter).
    categoricalFilters.innerHTML = '';
    const typeValues = Array.from(
      new Set(data.map(o => o.coderunnertype).filter(v => typeof v === 'string' && v.trim() !== ''))
    ).sort();
    if (typeValues.length > 0) {
      const select = document.createElement('select');
      select.className = 'form-control form-control-sm';
      select.dataset.key = 'coderunnertype';

      const emptyOption = document.createElement('option');
      emptyOption.value = '';
      emptyOption.textContent = '(any)';
      select.appendChild(emptyOption);

      typeValues.forEach(v => {
        const option = document.createElement('option');
        option.value = v;
        option.textContent = v;
        select.appendChild(option);
      });

      categoricalFilters.appendChild(select);
    }
  }

  /**
   *
   */
  function getNumericFilterRanges() {
    const inputs = numericFilters.querySelectorAll('input[type="number"]');
    const ranges = {};
    inputs.forEach(inp => {
      const key = inp.dataset.key;
      const kind = inp.dataset.kind;
      const val = inp.value === '' ? null : Number(inp.value);
      ranges[key] = ranges[key] || {min: null, max: null};
      ranges[key][kind] = val;
    });
    return ranges;
  }

  // Advanced filter functions
  /**
   *
   */
  function getAvailableFields() {
    const keys = Array.from(new Set(rawData.flatMap(obj => Object.keys(obj))));
    const excludedKeys = ['version', 'timemodified', 'type', 'courseid', 'lines_of_code'];
    return keys.filter(k => !excludedKeys.includes(k)).sort();
  }

  /**
   *
   * @param {string} field
   */
  function getOperatorsForField(field) {
    // Determine field type from data
    const sampleValues = rawData.slice(0, 10).map(obj => obj[field]).filter(v => v !== null && v !== undefined);

    if (sampleValues.length === 0) {
      return ['contains', 'does not contain', 'equals', 'does not equal', 'matches regex', 'does not match regex'];
    }

    const firstValue = sampleValues[0];

    if (Array.isArray(firstValue)) {
      return ['includes', 'does not include', 'is empty', 'is not empty', 'matches regex', 'does not match regex'];
    } else if (typeof firstValue === 'number') {
      return ['equals', 'does not equal', 'greater than', 'less than', 'greater or equal', 'less or equal'];
    } else {
      return [
        'contains', 'does not contain', 'equals', 'does not equal', 'starts with', 'ends with',
        'is empty', 'is not empty', 'matches regex', 'does not match regex'
      ];
    }
  }

  /**
   *
   * @param {object} obj
   * @param {object} rule
   */
  function evaluateRule(obj, rule) {
    const fieldValue = obj[rule.field];
    const compareValue = rule.value;

    switch (rule.operator) {
      case 'contains':
        return String(fieldValue || '').toLowerCase().includes(String(compareValue).toLowerCase());
      case 'does not contain':
        return !String(fieldValue || '').toLowerCase().includes(String(compareValue).toLowerCase());
      case 'equals':
        return String(fieldValue || '').toLowerCase() === String(compareValue).toLowerCase();
      case 'does not equal':
        return String(fieldValue || '').toLowerCase() !== String(compareValue).toLowerCase();
      case 'starts with':
        return String(fieldValue || '').toLowerCase().startsWith(String(compareValue).toLowerCase());
      case 'ends with':
        return String(fieldValue || '').toLowerCase().endsWith(String(compareValue).toLowerCase());
      case 'is empty':
        return !fieldValue || (Array.isArray(fieldValue) && fieldValue.length === 0) || String(fieldValue).trim() === '';
      case 'is not empty':
        return fieldValue && (!Array.isArray(fieldValue) || fieldValue.length > 0) && String(fieldValue).trim() !== '';
      case 'includes':
        if (Array.isArray(fieldValue)) {
          return fieldValue.some(v => String(v).toLowerCase().includes(String(compareValue).toLowerCase()));
        }
        return String(fieldValue || '').toLowerCase().includes(String(compareValue).toLowerCase());
      case 'does not include':
        if (Array.isArray(fieldValue)) {
          return !fieldValue.some(v => String(v).toLowerCase().includes(String(compareValue).toLowerCase()));
        }
        return !String(fieldValue || '').toLowerCase().includes(String(compareValue).toLowerCase());
      case 'matches regex':
        try {
          const regex = new RegExp(compareValue, 'i');
          if (Array.isArray(fieldValue)) {
            return fieldValue.some(v => regex.test(String(v)));
          }
          return regex.test(String(fieldValue || ''));
        } catch (e) {
          // eslint-disable-next-line no-console
          console.error('Invalid regex pattern:', compareValue, e);
          return false;
        }
      case 'does not match regex':
        try {
          const regex = new RegExp(compareValue, 'i');
          if (Array.isArray(fieldValue)) {
            return !fieldValue.some(v => regex.test(String(v)));
          }
          return !regex.test(String(fieldValue || ''));
        } catch (e) {
          // eslint-disable-next-line no-console
          console.error('Invalid regex pattern:', compareValue, e);
          return true; // If regex is invalid, consider it as "not matching"
        }
      case 'greater than':
        return Number(fieldValue) > Number(compareValue);
      case 'less than':
        return Number(fieldValue) < Number(compareValue);
      case 'greater or equal':
        return Number(fieldValue) >= Number(compareValue);
      case 'less or equal':
        return Number(fieldValue) <= Number(compareValue);
      default:
        return true;
    }
  }

  /**
   *
   * @param {object|null} rule
   */
  function createFilterRule(rule = null) {
    const ruleId = rule?.id || ruleIdCounter++;
    const ruleDiv = document.createElement('div');
    ruleDiv.dataset.ruleId = ruleId;

    const ruleContainer = document.createElement('div');
    ruleContainer.className = 'filter-rule';
    ruleContainer.style.gridTemplateColumns = '1.8fr 2fr 1.8fr auto';

    // Field select
    const fieldSelect = document.createElement('select');
    fieldSelect.className = 'form-control form-control-sm';
    const fields = getAvailableFields();
    fields.forEach(f => {
      const opt = document.createElement('option');
      opt.value = f;
      opt.textContent = f;
      if (rule && rule.field === f) {
 opt.selected = true;
}
      fieldSelect.appendChild(opt);
    });

    // Operator select
    const operatorSelect = document.createElement('select');
    operatorSelect.className = 'form-control form-control-sm';
    const updateOperators = () => {
      const selectedField = fieldSelect.value;
      operatorSelect.innerHTML = '';
      const operators = getOperatorsForField(selectedField);
      operators.forEach(op => {
        const opt = document.createElement('option');
        opt.value = op;
        opt.textContent = op;
        if (rule && rule.operator === op) {
 opt.selected = true;
}
        operatorSelect.appendChild(opt);
      });
      updateValueInput();
    };

    // Value input
    const valueInput = document.createElement('input');
    valueInput.type = 'text';
    valueInput.className = 'form-control form-control-sm';
    valueInput.placeholder = 'value';
    if (rule) {
 valueInput.value = rule.value || '';
}

    const updateValueInput = () => {
      const operator = operatorSelect.value;
      if (operator === 'is empty' || operator === 'is not empty') {
        valueInput.disabled = true;
        valueInput.value = '';
        valueInput.placeholder = '';
        valueInput.title = '';
      } else if (operator === 'matches regex' || operator === 'does not match regex') {
        valueInput.disabled = false;
        valueInput.placeholder = 'regex pattern';
        valueInput.title = strings.tip_regex_input;
      } else {
        valueInput.disabled = false;
        valueInput.placeholder = 'value';
        valueInput.title = '';
      }
    };

    fieldSelect.addEventListener('change', updateOperators);
    operatorSelect.addEventListener('change', updateValueInput);

    // Remove button
    const removeBtn = document.createElement('button');
    removeBtn.className = 'btn btn-sm btn-outline-danger';
    removeBtn.textContent = '×';
    removeBtn.title = strings.tip_remove_rule;
    removeBtn.addEventListener('click', () => {
      advancedRules = advancedRules.filter(r => r.id !== ruleId);
      ruleDiv.remove();
      updateActiveFiltersChips();
    });

    ruleContainer.append(fieldSelect, operatorSelect, valueInput, removeBtn);
    ruleDiv.appendChild(ruleContainer);

    // Add connector if not the first rule
    if (filterRulesEl.children.length > 0) {
      const connector = document.createElement('div');
      connector.className = 'filter-connector';

      const connectorSelect = document.createElement('select');
      connectorSelect.className = 'form-control filter-connector-select';
      ['AND', 'OR'].forEach(op => {
        const opt = document.createElement('option');
        opt.value = op;
        opt.textContent = op;
        if (rule && rule.connector === op) {
 opt.selected = true;
}
        connectorSelect.appendChild(opt);
      });

      connector.appendChild(connectorSelect);
      ruleDiv.insertBefore(connector, ruleContainer);

      connectorSelect.addEventListener('change', () => {
        const existingRule = advancedRules.find(r => r.id === ruleId);
        if (existingRule) {
          existingRule.connector = connectorSelect.value;
        }
      });
    }

    updateOperators();

    // Store rule data
    const ruleData = {
      id: ruleId,
      connector: rule?.connector || 'AND',
      get field() {
 return fieldSelect.value;
},
      get operator() {
 return operatorSelect.value;
},
      get value() {
 return valueInput.value;
}
    };

    if (!rule) {
      advancedRules.push(ruleData);
    }

    return ruleDiv;
  }

  /**
   *
   */
  function updateActiveFiltersChips() {
    activeFiltersChips.innerHTML = '';

    advancedRules.forEach((rule, idx) => {
      const chip = document.createElement('div');
      chip.className = 'filter-chip';

      const text = document.createElement('span');
      const connector = idx > 0 ? `${rule.connector} ` : '';
      const valueText = rule.operator === 'is empty' || rule.operator === 'is not empty' ? '' : `: "${rule.value}"`;
      text.textContent = `${connector}${rule.field} ${rule.operator}${valueText}`;

      const removeBtn = document.createElement('button');
      removeBtn.className = 'filter-chip-remove';
      removeBtn.textContent = '×';
      removeBtn.title = strings.tip_remove_filter;
      removeBtn.addEventListener('click', () => {
        advancedRules = advancedRules.filter(r => r.id !== rule.id);
        const ruleEl = filterRulesEl.querySelector(`[data-rule-id="${rule.id}"]`);
        if (ruleEl) {
 ruleEl.remove();
}
        updateActiveFiltersChips();
      });

      chip.append(text, removeBtn);
      activeFiltersChips.appendChild(chip);
    });
  }

  /**
   *
   * @param {Array} data
   */
  function applyAdvancedFilters(data) {
    if (advancedRules.length === 0) {
 return data;
}

    return data.filter(obj => {
      let result = evaluateRule(obj, advancedRules[0]);

      for (let i = 1; i < advancedRules.length; i++) {
        const rule = advancedRules[i];
        const ruleResult = evaluateRule(obj, rule);

        if (rule.connector === 'AND') {
          result = result && ruleResult;
        } else {
          result = result || ruleResult;
        }
      }

      return result;
    });
  }

  /**
   *
   */
  function applyFilters() {
    let out = rawData.slice();

    // Numeric
    const ranges = getNumericFilterRanges();
    for (const [k, {min, max}] of Object.entries(ranges)) {
      if (min !== null) {
 out = out.filter(o => isNumber(o[k]) ? o[k] >= min : true);
}
      if (max !== null) {
 out = out.filter(o => isNumber(o[k]) ? o[k] <= max : true);
}
    }

    // Categorical
    categoricalFilters.querySelectorAll('select').forEach(sel => {
      const key = sel.dataset.key;
      const val = sel.value;
      if (val !== '') {
        out = out.filter(o => (o[key] ?? '') === val);
      }
    });

    // Keyword
    const needle = kw.value.trim();
    if (needle) {
      const mode = kwMode.value;
      const fieldChoice = kwField.value;
      const searchType = kwType.value;

      let regex = null;
      if (searchType === 'Regex') {
        try {
          regex = new RegExp(needle, 'i');
        } catch (e) {
          alert(strings.alert_bad_regex + ': ' + e.message);
          return;
        }
      }

      const matches = (obj) => {
        if (fieldChoice === 'Any') {
          return Object.values(obj).some(v => {
            let s;
            if (Array.isArray(v)) {
 s = v.join(', ');
} else if (v && typeof v === 'object') {
 s = JSON.stringify(v);
} else {
 s = String(v ?? '');
}

            if (searchType === 'Regex') {
              return regex.test(s);
            } else {
              return s.toLowerCase().includes(needle.toLowerCase());
            }
          });
        } else {
          const v = obj[fieldChoice];
          let s;
          if (Array.isArray(v)) {
 s = v.join(', ');
} else if (v && typeof v === 'object') {
 s = JSON.stringify(v);
} else {
 s = String(v ?? '');
}

          if (searchType === 'Regex') {
            return regex.test(s);
          } else {
            return s.toLowerCase().includes(needle.toLowerCase());
          }
        }
      };
      out = out.filter(o => (mode === 'Include') ? matches(o) : !matches(o));
    }

    // Advanced filters
    out = applyAdvancedFilters(out);

    viewData = out;
    renderList(viewData);
    updateActiveFiltersChips();
  }

  /**
   *
   */
  function clearFiltersUI() {
    numericFilters.querySelectorAll('input').forEach(i => {
      i.value = '';
    });
    categoricalFilters.querySelectorAll('select').forEach(s => {
      s.value = '';
    });
    kw.value = '';
    kwMode.value = 'Include';
    kwField.value = 'Any';
    kwType.value = 'Text';

    // Clear advanced filters
    advancedRules = [];
    filterRulesEl.innerHTML = '';
    updateActiveFiltersChips();
  }

  // Advanced filter toggle
  advancedToggle.addEventListener('click', () => {
    const isExpanded = advancedContent.classList.contains('show');
    if (isExpanded) {
      advancedContent.classList.remove('show');
      advancedToggle.querySelector('.advanced-toggle-icon').classList.remove('expanded');
    } else {
      advancedContent.classList.add('show');
      advancedToggle.querySelector('.advanced-toggle-icon').classList.add('expanded');
    }
  });

  // Add rule button
  addRuleBtn.addEventListener('click', () => {
    if (advancedRules.length >= 6) {
      alert(strings.alert_max_rules);
      return;
    }
    const ruleEl = createFilterRule();
    filterRulesEl.appendChild(ruleEl);
  });

  // DOM is already ready when AMD init runs (called from page footer).
  buildFilters(rawData);
  renderList(viewData);
  initializeResizers();

  // Enter key on search field applies filters
  kw.addEventListener('keypress', (e) => {
    if (e.key === 'Enter') {
      applyFilters();
    }
  });

  // Resizer functionality
  /**
   *
   */
  function initializeResizers() {
    // Main panel resizer
    let isResizingMain = false;
    let startX = 0;
    let startWidth = 0;

    mainResizer.addEventListener('mousedown', (e) => {
      isResizingMain = true;
      startX = e.clientX;
      startWidth = filterPanel.offsetWidth;
      document.body.classList.add('resizing');
      e.preventDefault();
    });

    document.addEventListener('mousemove', (e) => {
      if (isResizingMain) {
        const delta = e.clientX - startX;
        const newWidth = Math.max(250, Math.min(600, startWidth + delta));
        qbrowserMain.style.gridTemplateColumns = `${newWidth}px 1fr`;
        // Update resizer position to stay centered in gap
        mainResizer.style.left = `calc(${newWidth}px + 0.75rem)`;
      }
    });

    document.addEventListener('mouseup', () => {
      if (isResizingMain) {
        isResizingMain = false;
        document.body.classList.remove('resizing');
      }
    });

    // Column resizers (delegated event listener)
    document.addEventListener('mousedown', (e) => {
      if (e.target.classList.contains('column-resizer')) {
        const resizer = e.target;
        const columnIndex = parseInt(resizer.dataset.columnIndex);
        const table = resizer.closest('table');
        const colgroup = table.querySelector('colgroup');
        const cols = Array.from(colgroup.children);

        let startX = e.clientX;
        let startWidth = cols[columnIndex].offsetWidth || parseInt(cols[columnIndex].style.width);
        let nextStartWidth = cols[columnIndex + 1].offsetWidth || parseInt(cols[columnIndex + 1].style.width);

        document.body.classList.add('resizing');
        e.preventDefault();

        const onMouseMove = (e) => {
          const delta = e.clientX - startX;
          const newWidth = Math.max(80, startWidth + delta);
          const nextNewWidth = Math.max(80, nextStartWidth - delta);

          cols[columnIndex].style.width = newWidth + 'px';
          cols[columnIndex + 1].style.width = nextNewWidth + 'px';

          // Store widths
          const columnNames = ['name', 'actions', 'category', 'tags', 'usedin'];
          columnWidths[columnNames[columnIndex]] = newWidth;
          columnWidths[columnNames[columnIndex + 1]] = nextNewWidth;
        };

        const onMouseUp = () => {
          document.body.classList.remove('resizing');
          document.removeEventListener('mousemove', onMouseMove);
          document.removeEventListener('mouseup', onMouseUp);
        };

        document.addEventListener('mousemove', onMouseMove);
        document.addEventListener('mouseup', onMouseUp);
      }
    });
  }

  // Apply/Clear
  applyBtn.addEventListener('click', applyFilters);
  clearBtn.addEventListener('click', () => {
 clearFiltersUI(); viewData = rawData.slice(); renderList(viewData);
});

  // Export
  exportJsonBtn.addEventListener('click', () => {
    download('filtered_questions.json', JSON.stringify(viewData, null, 2), 'application/json');
  });
  exportCsvBtn.addEventListener('click', () => {
    download('filtered_questions.csv', toCSV(viewData), 'text/csv');
  });


    };

    return {
        init: init
    };
});
