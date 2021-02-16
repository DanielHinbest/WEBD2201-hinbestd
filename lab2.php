<?php
	$title = "Lab 2";
	$file = "lab2.php";
	$description = "Lab 2 page for my WEBD2201 Website";
	$date = "30 January 2020";
	$banner = "Lab 2: Working with HTML Tables";
	/*
	Daniel Hinbest
	WEBD2201
	March 2, 2020
*/
?>
<?php include 'header.php'; ?>

	<h2>Lab 2: Working with HTML Tables</h2>
	
	<p>This page uses tags for &lt;caption&gt;, &lt;table&gt;, &lt;tr&gt;, &lt;td&gt; and &lt;th&gt; for the creation of tables. I also used &lt;rowspan&gt; and &lt;colspan&lt; for the 
	timetable to spread out the length over a certain amount of days or hours in the day. 
	This lab page shows what these tags are and how they are used. This page also shows three of my favourite books, as well as my current Winter 2020 Timetable. 
	The table features have also been added to the Home Page, as well as the Lab 1 Page. This is to make it a more organized and cleaner look throughout the website.</p>
	<table>	
	<caption><b>HTML Table Tags</b></caption>
	<tr><th><b>Tag</b></th><th><b>Description</b></th></tr>
	<tr><td>&lt;table&gt;</td><td>Denotes the start of an HTML table in a web page</td></tr>
	<tr><td>&lt;tr&gt;</td><td>Denotes the start of a row in an HTML table (NOTE: these tags must exist inside &lt;table&gt;...&lt;/table&gt; tags in order to be valid, and work correctly)</td></tr>
	<tr><td>&lt;td&gt;</td><td>Denotes the a cell (or Table Data) in an HTML table (NOTE: these tags must exist inside &lt;tr&gt;...&lt;/tr&gt; tags in order to be valid, and work correctly)</td></tr>
	<tr><td>&lt;th&gt;</td><td>Very similar to the &lt;td&gt; tags described above but the text is bold and centered.</td></tr>
	<tr><td>&lt;caption&gt;</td><td>Will place a caption on an HTML table (NOTE: this tag must be implemented right after the opening &lt;table&gt; tag in order to be valid and work correctly).</td></tr>
	</table>
	<hr/>
	
	<table>
	<caption><b>My Favourite Books</b></caption>
	<tr><th align="center"><b>Title</b></th><th align="center"><b>Author</b></th><th><b>Year of Publication</b></th><th><b>Description</b></th></tr>
	<tr><td>Ready Player One</td><td>Ernest Cline</td><td>2011</td><td>Ready Player One is a science-fiction novel set in  the year 2045. The inventor of a virtual reality world
	known as the OASIS, James Halliday passed, which launches a hunt for an Easter Egg. The first to reach	the egg would receive ownership of the popular game.</td></tr>
	<tr><td>Armada</td><td>Ernest Cline</td><td>2015</td><td>Armada is a science fiction novel. It starts off where Zack Lightman, a senior in high school spots a flying saucer
	outside of his school, preparing for an invasion. Zack later finds out he was recruited to fight against the aliens using a system similar to <i>Armada</i>, 
	a video game designed to prepare people for the battle. It is then up to Zack and the other fighters to save humanity.</td></tr>
	<tr><td>Love and Courage</td><td>Jagmeet Singh</td><td>2019</td><td>Jagmeet Singh is the current leader of Canada's New Democratic Party (NDP) and is the first
	visible minority to lead a Canadian federal party. <i>Love and Courage</i> is a story about his family, and his youth, and the challenges he faced growing up
	with racism and growing up with his father's alcoholism. It covers his family's close bond and his road to overcoming all his challenges on his road to a better life.</td></tr>
	</table>
	<hr/>
	
	<table>
	<caption><b>Winter 2020 Timetable</b></caption>
	<tr><th></th><th><b>Monday</b></th><th><b>Tuesday</b></th><th><b>Wednesday</b></th><th><b>Thursday</b></th><th><b>Friday</b></th></tr>
	<tr><td>8:10am-9:00am</td><td valign="top" rowspan="2" style="background-color:Yellow;">LINU4100<br/>CRN: 25415<br/>H226</td><td></td><td></td><td></td><td></td></tr>
	<tr><td>9:10am-10:00am</td><td></td><td></td><td></td><td></td></tr>
	<tr><td>10:10am-11:00am</td><td></td><td></td><td valign="top" rowspan="2" style="background-color:Yellow;">GNED1462<br/>CRN: 25195<br/>CFCE145</td><td></td><td></td></tr>
	<tr><td>11:00am-12:00pm</td><td valign="top" rowspan="2" style="background-color:Yellow;">WEBD2201<br/>CRN: 26242<br/>L203</td><td></td><td></td><td></td></tr>
	<tr><td>12:10pm-1:00pm</td><td align="center" colspan="3" style="background-color:LightGreen;"><b>Lunch</b></td><td></td></tr>
	<tr><td>1:10pm-2:00pm</td><td align="center" style="background-color:LightGreen;"><b>Lunch</b></td><td valign="top" rowspan="2" style="background-color:Yellow;">OOP2200<br/>CRN: 25737<br/>L203</td><td></td><td></td><td></td></tr>
	<tr><td>2:10pm-3:00pm</td><td></td><td></td><td></td><td></td></tr>
	<tr><td>3:10pm-4:00pm</td><td></td><td></td><td valign="top" rowspan="3" style="background-color:Yellow;">NETD2202<br/>CRN: 25670<br/>H134</td><td></td><td></td></tr>
	<tr><td>4:10pm-5:00pm</td><td></td><td valign="top" rowspan="3" style="background-color:Yellow;">SYDE2203<br/>CRN: 26153<br/>C309</td><td valign="top" rowspan="2" style="background-color:Yellow;">WEBD2201<br/>CRN: 26242<br/>H133</td><td></td></tr>
	<tr><td>5:10pm-6:00pm</td><td></td><td></td></tr>
	<tr><td>6:10pm-7:00pm</td><td></td><td align="center" colspan="2" style="background-color:LightGreen;"><b>Lunch</b></td><td></td></tr>
	<tr><td>7:10pm-8:00pm</td><td></td><td></td><td valign="top" rowspan="2" style="background-color:Yellow;">LINU4100<br/>CRN: 25415<br/>H226</td><td valign="top" rowspan="2" style="background-color:Yellow;">OOP2200<br/>CRN: 25737<br/>C319</td><td></td></tr>
	<tr><td>8:10pm-9:00pm</td><td></td><td></td><td></td></tr>
	</table>
	<hr/>

  <?php include 'footer.php'; ?>