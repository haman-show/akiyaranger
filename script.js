'use strict';

const HEIGHT_HEADER = 60;
const nextButton = $('#next_button');
const prevButton = $('#prev_button');
const calendarBody = $('#calendar tbody');
const textYear = $('#calendar_heading .year');
const textMonth = $('#calendar_heading .month');
const days = [
  {jp: '月', en: 'mon'},
  {jp: '火', en: 'tue'},
  {jp: '水', en: 'wed'},
  {jp: '木', en: 'thu'},
  {jp: '金', en: 'fri'},
  {jp: '土', en: 'sat'},
  {jp: '日', en: 'sun'}
];
const today = new Date();
const current = {
  year: today.getFullYear(),
  month: today.getMonth(),
  date: today.getDate()
};

function setCols(count, row, cols, args, callback) {
  let td;
  if (row === 0 && args.startDay === count) {
    args.textSkip = false;
  } 
  if (args.textDate > args.endDay) {
    args.textSkip = true;
  } 
  if (args.textSkip) {
    td = '<td class="col sp-none">&nbsp;</td>';
  } else {
    td = '<td class="col defined ' + days[count].en + '"><div class="text-date';
    if (today.getFullYear() === args.currentYear && today.getMonth() === args.currentMonth && args.textDate === args.currentDate) {
      td += ' current-date';
    }
    td += '"><span class="icon">' + args.textDate + '</span><span class="pc-none days-jp">(' + days[count].jp + ')</span></div><div class="text-schedule"></div></td>';
    args.textDate++;
  }
  cols += td;
  count++;
  if (count < days.length) {
    setCols(count, row, cols, args, callback);
  } else {
    callback(null, cols);
  }
}

function setRows(count, rows, args, callback) {
  let cols;
  setCols(0, count, cols, args, function(err, res) {
    if (err) {
      callback(err);
    } else {
      rows += '<tr>' + res + '</tr>';
    }
  });
  count++;
  if (count < args.maxRow) {
    setRows(count, rows, args, callback);
  } else {
    callback(null, rows);
  }
}

function createCalendarBody(year, month, date) {
  const startDate = new Date(year, month, 1);
  const endDate = new Date(year, month + 1, 0);
  let startDay = startDate.getDay();
  startDay = startDay === 0 ? 6 : startDay - 1;
  const endDay = endDate.getDate();
  const maxCol = startDay + endDay;
  const maxRow = maxCol % 7 === 0 ? Math.floor(maxCol / 7) : Math.floor(maxCol / 7) + 1;
  const args = {
    currentYear: year,
    currentMonth: month,
    currentDate: date,
    startDate: startDate,
    endDate: endDate,
    startDay: startDay,
    endDay: endDay,
    maxRow: maxRow,
    textDate: 1,
    textSkip: true
  };
  let rows = '';
  setRows(0, rows, args, function(err, res) {
    if (err) {
      console.log(err);
    } else {
      calendarBody.html(res);
    }
  });
}

function createCalendar(year, month, date) {
  textYear.text(year);
  textMonth.text(month + 1);
  current.year = year;
  current.month = month;
  current.date = date;
  createCalendarBody(year, month, date);
}

function setCurrentYearAndMonth(year, month, date, nextOrPrev) {
  if (nextOrPrev) {
    if (month < 11) {
      month++;
    } else {
      year++;
      month = 0;
    }
  } else {
    if (month > 0) {
      month--;
    } else {
      year--;
      month = 11;
    }
  }
  createCalendar(year, month, date);
}

nextButton.click(function() {
  setCurrentYearAndMonth(current.year, current.month, current.date, true);
});

prevButton.click(function() {
  setCurrentYearAndMonth(current.year, current.month, current.date, false);
});

$(window).on('load', function(){
  createCalendar(current.year, current.month, current.date);
});

/* smooth scroll */
$(function(){
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top - HEIGHT_HEADER;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});

/* parallax */
$(function(){
  let scrollPosi = 0;
	$(window).scroll(function () {
		scrollPosi = $(document).scrollTop();
    $('#para1').stop(true, true).animate({
      'background-position-y': -scrollPosi / 3 + 'px'
		}, 100);
	});
});

/* scroll animation */
$(window).on('load scroll', function() {
  $('.special-content .list .box').each(function(i) {
    add_class_in_scrolling($(this));
  });
});
 
// スクロールで要素が表示された時にclassを付与する
function add_class_in_scrolling(target) {
  var winScroll = $(window).scrollTop();
  var winHeight = $(window).height();
  var scrollPos = winScroll + winHeight;
  if(target.offset().top < scrollPos) {
      target.addClass('is-show');
  }
}
