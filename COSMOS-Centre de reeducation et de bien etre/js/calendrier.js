// <!-- <![CDATA[

function _JSL(p, a, t, n, o, ac)
{
	var _p = p;
	var _b = p.WD_BUTTON_CLICK_.value;
	var _t = p.target;

	a = _CFI(a);
	p.WD_ACTION_.value = (ac ? ac : "");
	p.WD_BUTTON_CLICK_.value = a;
	var s = ((navigator.appName == "Microsoft Internet Explorer") && (navigator.platform.substr(0, 3) == "Mac")) ? 200 : 1;
	switch (t)
	{
	case "_blank":
		if (o)
		{
			var e = (n != "" ? n.toUpperCase() : "_BLANK_" + Math.abs((new Date()).getTime()));
			if (o)
			{
				open("", e, o);
			}
			else
			{
				open("", e);
			}
			t = e;
			s = 1000;
		}
		// Pas de break;
	case "_self":
	case "_top":
	case "_parent":
		p.target = t;
		break;
	default:
		p.target = t.toUpperCase();
		break;
	}
	p.submit();
	setTimeout(function() { _p.target = _t; _p.WD_BUTTON_CLICK_.value = _b; }, s);
}


// Set the initial date.
var ds_i_date = new Date();
ds_c_month = ds_i_date.getMonth() + 1;
ds_c_year = ds_i_date.getFullYear();

// Get Element By Id
function ds_getel(s_date) {
	return document.getElementById(s_date);
}

// Get the left and the top of the element.
function ds_getleft(el) {
	var tmp = el.offsetLeft;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetLeft;
		el = el.offsetParent;
	}
	return tmp;
}
function ds_gettop(el) {
	var tmp = el.offsetTop;
	el = el.offsetParent
	while(el) {
		tmp += el.offsetTop;
		el = el.offsetParent;
	}
	return tmp;
}

setTimeout(
	function(){
		// Output Element
		ds_oe = ds_getel('ds_calclass');
		// Container
		ds_ce = ds_getel('ds_conclass');
	}, 100
);

// Output Buffering
var ds_ob = ''; 
function ds_ob_clean() {
	ds_ob = '';
}
function ds_ob_flush() {
	ds_oe.innerHTML = ds_ob;
	ds_ob_clean();
}
function ds_echo(t) {
	ds_ob += t;
}

var ds_element; // Text Element...

var ds_monthnames = [
'Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin',
'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre'
]; // You can translate it for your language.

var ds_daynames = [
'Dim', 'Lun', 'Mar', 'Me', 'Jeu', 'Ven', 'Sam'
]; // You can translate it for your language.

// Calendar template
function ds_template_main_above(t) {
	return '<table cellpadding="3" cellspacing="1" class="ds_tbl">'
		 + '<tr>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_py();">&lt;&lt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_pm();">&lt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_hi();" colspan="3">[Fermer]</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_nm();">&gt;</td>'
		 + '<td class="ds_head" style="cursor: pointer" onclick="ds_ny();">&gt;&gt;</td>'
		 + '</tr>'
		 + '<tr>'
		 + '<td colspan="7" class="ds_head">' + t + '</td>'
		 + '</tr>'
		 + '<tr>';
}

function ds_template_day_row(t) {
	return '<td class="ds_subhead">' + t + '</td>';
	// Define width in CSS, XHTML 1.0 Strict doesn't have width property for it.
}
function ds_template_day_ajout(t){
return '<td class="ds_cell">' + t + '</td>';

}


function ds_template_new_week() {
	return '</tr><tr>';
}

function ds_template_blank_cell(colspan) {
	return '<td colspan="' + colspan + '"></td>'
}

function ds_template_day(d, m, y, cls) {
	return '<td class="'+cls+'" onclick="ds_onclick(' + d + ',' + m + ',' + y + ')">' + d + '</td>';
	// Define width the day row.
}

function ds_template_main_below() {
	return '</tr>' + '</table>';
}

// This one draws calendar...
function ds_draw_calendar(m, y) {
	// First clean the output buffer.
	ds_ob_clean();
	// Here we go, do the header
	var dnp;
	var year;
	var month;
	var day;
	var test;
	var d_non_dispo=document.getElementById("dnp").value;
	//var d_non_dispo='2014-04-10,2014-04-09';
	var dates_non_dispo=d_non_dispo.split(',');
	
	ds_echo (ds_template_main_above(ds_monthnames[m - 1] + ' ' + y));
	
	for (i = 0; i < 7; i ++) {
	    
		ds_echo (ds_template_day_row(ds_daynames[i]));
		
	}
	
	if (m == 1 || m == 3 || m == 5 || m == 7 || m == 8 || m == 10 || m == 12) {
		days = 31;
	}
	else if (m == 4 || m == 6 || m == 9 || m == 11) {
		days = 30;
	}
	else {
		days = (y % 4 == 0) ? 29 : 28;
	}
	var first_day = new Date(y, (m-1), 1).getDay();
	var first_loop = 1;
	// Start the first week
	ds_echo (ds_template_new_week());
	// If sunday is not the first day of the month, make a blank cell...
	if (first_day != 0) {
		ds_echo (ds_template_blank_cell(first_day));
	}
	var j = first_day;
	for (i = 0; i < days; i ++) {
		// Today is sunday, make a new week.
		// If this sunday is the first day of the month,
		// we've made a new row for you already.
		if (j == 0 && !first_loop) {
			// New week!!
			ds_echo (ds_template_new_week());
		}
		test=0
		for(var a= 0; a < dates_non_dispo.length; a++)
         {
          dnp=dates_non_dispo[a];
		  tab_dnp=dnp.split('-');
		  year=tab_dnp[0];
		  month=tab_dnp[1];
		  day=tab_dnp[2];
	      if ((year==y) && (month==m) && ((i+1)==day) && (test==0)) {
		    ds_echo (ds_template_day(i + 1, m, y,"ds_cell_ndp"));
			test=1;
		  }
         }
		 if (test==0) {
		 ds_echo (ds_template_day(i + 1, m, y,"ds_cell"));
		 }
		first_loop = 0; // This is not first loop anymore...
		
		// What is the next day?
		j ++;
		j %= 7;
	}
	
	ds_echo (ds_template_main_below()); // Do the footer
	ds_ob_flush();                      // And let's display..
	ds_ce.scrollIntoView();             // Scroll it into view.
	
}

// A function to show the calendar.
// When user click on the date, it will set the content of t.
function ds_sh(t) {
	
	// Set the element to set...
	ds_element = t;
	// Make a new date, and set the current month and year.
	var ds_sh_date = new Date();
	ds_c_month = ds_sh_date.getMonth() + 1;
	ds_c_year = ds_sh_date.getFullYear();
	// Draw the calendar
	ds_draw_calendar(ds_c_month, ds_c_year);
	// To change the position properly, we must show it first.
	ds_ce.style.display = '';
	// Move the calendar container!
	the_left = ds_getleft(t);
	the_top = ds_gettop(t) + t.offsetHeight;
	ds_ce.style.left = the_left + 'px';
	ds_ce.style.top = the_top + 'px';
	// Scroll it into view.
	ds_ce.scrollIntoView();
}

// Hide the calendar.
function ds_hi() {ds_ce.style.display = 'none';}

// Moves to the next month...
function ds_nm() {
	// Increase the current month.
	ds_c_month ++;
	// We have passed December, let's go to the next year.
	// Increase the current year, and set the current month to January.
	if (ds_c_month > 12) {
		ds_c_month = 1; 
		ds_c_year = ds_c_year + 1;
	}
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the previous month...
function ds_pm() {
	ds_c_month = ds_c_month - 1; // Can't use dash-dash here, it will make the page invalid.
	// We have passed January, let's go back to the previous year.
	// Decrease the current year, and set the current month to December.
	if (ds_c_month < 1) {
		ds_c_month = 12; 
		ds_c_year = ds_c_year - 1; // Can't use dash-dash here, it will make the page invalid.
	}
	// Redraw the calendar.
	ds_draw_calendar(ds_c_month, ds_c_year);
}

// Moves to the next year...
function ds_ny() {
	ds_c_year = ds_c_year + 1;   // Increase the current year.
	ds_draw_calendar(ds_c_month, ds_c_year); // Redraw the calendar.
}

// Moves to the previous year...
function ds_py() {
	// Decrease the current year.
	ds_c_year = ds_c_year - 1;               // Can't use dash-dash here, it will make the page invalid.
	ds_draw_calendar(ds_c_month, ds_c_year); // Redraw the calendar.
}

// Format the date to output.
function ds_format_date(d, m, y) {
	m2 = '00' + m; // 2 digits month.
	m2 = m2.substr(m2.length - 2);
	d2 = '00' + d; // 2 digits day.
	d2 = d2.substr(d2.length - 2);
	return d2 + '-' + m2 + '-' + y;
}

// When the user clicks the day.

function ds_onclick(d,m,y) {
  
  var Day = d;
  var Month = m;
  var Year = y;
  var Date =  Year+ '-' + Month + '-' + Day ;
  
  //alert('Date ' + Date);
  
  //var type = document.getElementById("Prestataire").value; 
  if (Date){ 
    document.getElementById("11").style.display="block";
	var sdate = document.getElementById("s_date");
    sdate.value = Date;
    var rdvdate = document.getElementById("rdv_date");	
    rdvdate.innerHTML = 'Date RDV : ' + Date; 	
	
  }else{    
    document.getElementById("11").style.display="none"; 
		  
  }  
}



// ]]> -->