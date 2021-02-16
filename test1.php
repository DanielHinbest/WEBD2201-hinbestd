<?php
	$title = "Daniel's Term Test 1";
	$file = "test1.php";
	$description = "This is the web page for the Test #1";
	$date = "13 February 2020";
	$banner = "Term Test 1";
	/*
	Daniel Hinbest
	WEBD2201
	March 2, 2020
*/
?>
<?php include 'header.php'; ?>

<h2>Term Test 1</h2>
	
	<p>This page is designed to show the various topics covered so far in Web Development- Fundamendals (<a href="http://opentech.durhamcollege.org/pufferd/webd2201">WEBD2201</a>) course.
	This page was designed with XHTML 1.0 Transitional, with the validation completed and displayed at the bottom of the page. It was laid out with a full page table,
	and with Cascading Style Sheets, which is also validated and displayed at the bottom of the page.</p>
	<table class="stocks">
	<tr><th colspan="5" align="center"><em>Top 5 Automakers Stock Information</em></th></tr>
	<tr><th>Company</th><th>Logo</th><th>Market</th><th>Stock Symbol</th><th>Price</th></tr>
	<tr><td>Volkswagen</td><td><img src="images/autologos/vw.png" alt="Volkswagen" width="71"></img></td><td valign="top">Frankfurt Stock Exchange</td><td align="center">VOW (FWB)</td><td align="right">&euro;173.70</td></tr>
	<tr><td>Renault</td><td><img src="images/autologos/renault.png" alt="Renault" width="71"></img></td><td valign="top">Euronext Paris<br/>(formerly Bourse de Paris)</td><td align="center">REN(PA)</td><td align="right">&euro;34.81</td></tr>
	<tr><td>Toyota Motor Corp.</td><td><img src="images/autologos/toyota.png" alt="Toyota" width="71"></img></td><td valign="top">Tokyo Stock Exchange</td><td align="center">TM(7023.JP)</td><td align="right">&yen;7758.00</td></tr>
	<tr><td><a href="https://www.gm.ca/">General Motors</a></td><td><img src="images/autologos/gm.png" alt="General Motors" width="71"></img></td><td rowspan = "2" valign="top">New York Stock Exchange</td><td align="center">GM(NYSE)</td><td align="right">$35.35USD</td></tr>
	<tr><td>Ford</td><td><img src="images/autologos/ford.png" alt="Ford" width="71"></img></td><td align="center">F(NYSE)</td><td align="right">$8.28USD</td></tr>
	</table>

<?php include 'footer.php'; ?>