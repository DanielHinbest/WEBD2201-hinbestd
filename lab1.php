<?php
	$title = "Lab 1";
	$file = "lab1.php";
	$description = "Lab 1 page for my WEBD2201 Website";
	$date = "23 January 2020";
	$banner = "Lab 1: XHTML Basics including Special Characters";
	/*
	Daniel Hinbest
	WEBD2201
	March 2, 2020
*/
?>
<?php include 'header.php'; ?>

	<h2>Lab 1: XHTML Basics including Special Characters</h2>
	
	<h3> Einstein's Relativity </h3>
	<p> For Einstein's Relativity formula you have to use the superscript (&lt;sup&gt;...&lt;/sup&gt;) and italic tags (&lt;i&gt;...&lt;/i&gt;). It is wrapped in heading 2 (&lt;h2&gt;...&lt;/h2&gt;)
	tags to make it larger and bolder.
	<b>NOTE: be careful with proper nesting to ensure the page passes the XHTML validator. This line is bolded using the bold (&lt;b&gt;...&lt;/b&gt;) tags.</b></p>
	<h2><i> E = mc<sup>2</sup></i></h2>
	<hr/>
	
	<h3> Currency Conversion (use of special characters) </h3>
	<p> The Currency Conversion will have us use the Euro, Pound, and Yen characters, which are created using (&euro;, &pound;, and &yen;). This will also use the Dollar sign ($)
	for Canadian and US Dollars</p>
	<h2> $1.00CDN = $0.703USD = &pound;0.487 = &euro;0.651 = &yen;82.11 </h2>
	<hr/>
	
	<h3> Code Snippet </h3>
	<p> This shows an example of some code that would be used to create a console application to display an output of "Hello World!" in the C++ programming language.
	<br/> The code will be formatted using the number space, and code font (&lt;code&gt;) settings.</p>
	<code>#include &lt;iostream.h&gt;
	<br/> 
	int main()
	<br/>{
	<br/>&nbsp;cout &lt;&lt; "Hello World!" &lt;&lt; endl;
	<br/>&nbsp;return 0;
	<br/>}</code>
	<hr/>
	
	<h3> Chemistry Equation </h3>
	<p> The chemistry equation has to be created using the subscript (&lt;sub&gt;). This would be needed to create the proper arrangement of the symbols.</p>
	<h2>2H<sub>2</sub> + O<sub>2</sub> => 2H<sub>2</sub>O + heat</h2>
	<hr/>
	
	<h3> List Example (order important) </h3>
	<p> To list off the instructions for starting a car, I would need to start by using &lt;ol&gt; for the ordered list, and &lt;li&gt; for the listed item.</p>
	<h2> How to start a car </h2>	
	<ol>
	<li>Place key in the ignition</li>
	<li>Depress the brake pedal</li>
	<li>Turn the ignition key</li></ol>
	<hr/>
	
	<h3> List Example (order unimportant) </h3>
	<p> Since this list does not need to be in a specific order, I just need to use &lt;ul&gt; for the unordered list, and &lt;li&gt; to represent the listed item.</p>
	<h2> Things to do before my trip </h2>
	<ul>
	<li>Renew passport</li>
	<li>Convert Currency</li>
	<li>Print out reservations &amp; itineraries</li>
	<li>Verify vaccinations are up-to-date</li></ul>
	<hr/>
	
<?php include 'footer.php'; ?>
	
	
	