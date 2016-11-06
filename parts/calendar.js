function pageLoad()
{
	g_DAYS = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
	g_MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
	createCalendar(undefined);

	g_organizer = true;
	if (g_organizer)
		createEventInput();
	showEventMaker();
}

function showEventMaker() {
	g_organizer = !g_organizer;
	$("#eventtoggle")[0].style.display = (g_organizer ? "inline" : "none")
}

$(function() {
$("body").on("click", "#eventtoggle",function() {
	$("#eventinput").slideToggle();
});});

function makeEvent()
{
	var eName = $("#eventname")[0].value;
	var eTime = $("#eventdatetime")[0].value;
	if (eName != "" && eTime != "")
	{
		eTime = eTime.split("T");
		eDate = eTime[0].split("-");
		eTime = eTime[1];
		var eYear = eDate[0];
		var eMonth = eDate[1];
		eDate = eDate[2];
		if (parseInt(eDate) < 10)
			eDate = eDate[1];

		if (parseInt(eYear) == cYear && parseInt(eMonth) - 1 == cMonth)
		{
			$("#cell" + eDate).append("<br>" + eName + "</br>");
			console.log("alpha")
		}

	}
	else
		alert("Please provide an event name and time!");
}

function createEventInput()
{
	$("#calendarheader").append("<input type='button' value = 'Toggle Event Creator' id='eventtoggle'>")
	$("#calendarheader").append("<div id = eventinput><br></div>");
	var eInput = $("#eventinput");
	eInput.append("<input type = 'text' placeholder = 'Event Name' id = 'eventname' class = 'eventdata'/>");
	eInput.append("<input type='datetime-local' id = 'eventdatetime' class = 'eventdata'/>");
	eInput.append("<input type='button' value = 'Submit Event' id = 'eventsubmit' onclick='makeEvent()'/>");
	eInput.append("<br><br><input style='width:250px; margin-top:-5px' type= 'text' placeholder = 'Address' id = 'eventlocation' class = 'eventdata' />")
	eInput.append("<input type = 'text' style='width:123px; margin-top:-5px' placeholder = 'Zip Code' id = 'eventzip' class = 'eventdata'/>")
	eInput.append("<br><textarea rows ='4' placeholder = 'Details' id = 'eventdetails' class = 'eventdata'/>");
	eInput.append("<div class='clear' />")

}

function createCalendar(p_date)
{
	while ($("#calendar").children()[0] != undefined)
		$("#calendar").children()[0].remove();

	console.log(p_date)

	if (p_date == undefined) {
		cDate = new Date();
		cYear = cDate.getYear() + 1900;
		cMonth = cDate.getMonth();
	}
	else {
		/*console.log(p_date);
		p_date = p_date.split("-");
		cDate = new Date();
		cMonth = parseInt(p_date[0])
		cYear = parseInt(p_date[0]);*/

	}
	var firstDay = new Date(cYear.toString(), cMonth.toString(), "01").getDay();
	$("#monthyear")[0].innerHTML = g_MONTHS[cMonth] + " " + cYear;

	//$("body").prepend("<div id = 'calendar' />")
	currentDate = -1;
	for (var rowNum = 0; rowNum < 5; rowNum++)
	{
		//console.log(rowNum)
		$("#calendar").append("<tr class = 'calendarRow' id = 'row"+rowNum+"' />");
		var newRow = "#row" + rowNum;
		if (rowNum == 0)
			$(newRow).addClass("firstRow");
		//console.log(newRow);

		for (var columnNum = 0; columnNum < 7; columnNum++)
		{

			var info = "";
			var newClass = "calendarCell"
			if (rowNum == 0)
			{
				info = g_DAYS[columnNum].toUpperCase();
				newClass = "hc";
				$(newRow).append("<td class = '"+newClass+"'>"+info+"</td>");
			}
			else {
				if (currentDate == -1 && columnNum == firstDay)
					currentDate++;
				if (currentDate != -1) {
					currentDate++;
					info = currentDate;
				}
				$(newRow).append("<td class = '"+newClass+"'><div class = 'dateholder'>"+info+"</div><div class = 'eventholder' id = 'cell"+currentDate+"'></div></td>");
			}
			
		}
	}

}

function changedate(relative, month, year) {
	if (relative)
	{
		cMonth += month;
		cYear += year;
		if (cMonth == 12) {
			cMonth = 0;
			cYear++;
		}
		else if (cMonth == -1)
		{
			cMonth = 11;
			cYear--;
		}
	}
	else
	{
		//specific code here
	} 
	createCalendar(true)
}

window.onload = pageLoad;