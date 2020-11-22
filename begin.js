

/* Visit our site at http://www.elahmad.com/ for more code*/
mydate = new Date();

var year=mydate.getYear()
if (year < 1000)
year+=1900

var myweekday=mydate.getDate()
if (myweekday<10)
myweekday="0"+myweekday

myday = mydate.getDay();
mymonth = mydate.getMonth();


if(myday == 0)
day = " Sunday"      
else if(myday == 1)
day = " Monday"
else if(myday == 2)
day = " Tuesday"   
else if(myday == 3)
day = " Wednesday"   
else if(myday == 4)
day = " Thursday"
else if(myday == 5)
day = " Friday"
else if(myday == 6)
day = "Saturday"
if(mymonth == 0) {
month = "1 "}
else if(mymonth ==1)
month = "2 "
else if(mymonth ==2)
month = "3 "
else if(mymonth ==3)
month = "4 "
else if(mymonth ==4)
month = "5 "
else if(mymonth ==5)
month = "6 "
else if(mymonth ==6)
month = "7 "
else if(mymonth ==7)
month = "8 "
else if(mymonth ==8)
month = "9 "
else if(mymonth ==9)
month = "10 "
else if(mymonth ==10)
month = "11 "
else if(mymonth ==11)
month = "12 "
// End -->
