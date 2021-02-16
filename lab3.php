<?php
	$title = "Lab 3";
	$file = "lab3.php";
	$description = "Lab 4 page for my WEBD2201 Website";
	$date = "6 February 2020";
	$banner = "Lab 3: Formatting and Layout with CSS";
	/*
	Daniel Hinbest
	WEBD2201
	March 2, 2020
*/
?>
<?php include 'header.php'; ?>

	<h2>Lab 3: Formatting and Layout with CSS</h2>
	
	<p> This lab was the first lab in which I added Cascading Style Sheets (CSS) into my website. I created a CSS file and then called it into the page. This also included
	the altering of the Home Page, Lab 1, and Lab 2 so they would use the CSS file rather than the HTML elements included in tags throughout the code. I was required to include 
	ten selectors for CSS, which are stated below, with some counting as one. These tags were <code> a:link, a:visited, a:active, </code>and<code> a:hover</code> as well as the header tags 
	<code>&lt;h1&gt;, &lt;h2&gt;, &lt;h3&gt;, &lt;h4&gt;, &lt;h5&gt;, </code>and<code> &lt;h6&gt;</code>. I was also required to have elements for the selectors: <code>body </code>and<code> th</code>.
	The purpose of using CSS is to make website cleaner and makes it easier to have a consistent look throughout the website.</p>
	<hr/>
	
	<h3>Body</h3>
	<p>The use of the body selector changes the properties for the overall look of the majority of the page, since most of it is in the body.
	The body selector included properties for <code>background-color</code> which is currently set to beige. I have also changed the font away from the default 
	Times New Roman to Calibri, with a second font set as Arial, at 18 pixels. This is set with the <code>font-family</code> property. I have also set changed the default font colour
	to a magenta-like colour using the <code>color</code> selector.
	</p>
	<hr/>
	
	<h3>Table Header</h3>
	<p>The th selector is used to change the look of the table headers. I have used the <code>font</code> to set the font at 18px, with the font set as Calibri or Arial.
	I also used the <code>background-color</code> to have a yellow shade. I also chose to make the font colour in the table headers different to help them stand out,
	using the <code>color</code> property. I chose to set the font colour in the table header to red so it would stand out and still be readable in the brighter background.
	I also added the <code>border-color</code> property and changed it to TBD.</p>
	<hr/>
	
	<h3>Caption</h3>
	<p>The caption selector alters the properties of the captions for tables. I used the <code>background-color</code> and set it to a khaki colour.
	I have also added the <code>color</code> property in this selector that would give the font a color that would work well with the background, rather than using 
	black to add a little more colour variety.</p>
	<hr/>
	
	<h3>Table</h3><!--Maybe add more here?-->
	<p>The table selector in CSS is used to change the settings of all the tables of the website. I chose to use the <code>border-style</code> in this selector with a solid line.
	I also added the <code>border-color</code> property and changed it to orange.</p>
	<hr/>
	
	<h3>Table Data</h3>
	<p>The td, or Table Data selector alters the elements of the cells in the tables. I am using the <code>border-style</code> property in the selector which creates a 
	solid line border in the td elements of the page. I have also set the <code>font</code> property in this selector to use 15 pixel size, with Calibri or Arial
	as the font used. I changed the <code>border-color</code> to O\orange to fit the overall website design nicely.</p>
	<hr/>
	
	<h3>Table Row</h3>
	<p>The tr selector is used for the Table Row elements in the website. I have it linked to the table selector in CSS, so it is using the <code>border-style</code>.
	The border style is set to create borders in the table rows with a solid line. I used the <code>border-color</code> property as well to change the colour of the
	page borders to orange, which I felt would fit in the page nicely.</p>
	<hr/>
	
	<h3>Header Tags</h3>
	<p>I set the h1 selector separate from the h2-h6 selectors because I wanted the colours to be different from the others using the <code>color</code> property.
	In the header 1 selector, I set the colour to red because I felt that it should stand out with it being my main header. I have the colour for header 2 to
	header 6 set as black because it is generally used more in the longer part of the body and it fits better with the paragraphs which is already black.
	I also added the <code>text-align</code> property in the file to center align the headers. I felt that it would look more balanced overall with the centered headers.</p>
	<hr/>
	
	<h3>Links</h3>
	<p>The a selector is using four pseudo-elements. The pseudo-elements used are <code>a:link, a:visited, a:hover and a:active</code>. The <code>a:link</code> pseudo-element
	is what shows when a link on the website is unvisited. I have set the <code>color</code> property to blue, which is what is generally easy to identify as a link.
	The <code>a:visited</code> pseudo-element is what happens when a link has been visited by a user. When a webpage has been visited, the colour of the link for that page
	changes to purple, which is the usual colour of links after they have been visited, and makes it easy to identify as a link on the page. The <code>a:hover</code> pseudo-element
	takes effect when the cursor is hovering over a link. In the CSS file, I used the <code>background-color</code> to change the background to gold, as well as have the font color
	change to a dark red. The fourth pseudo-element, <code>a:active</code> is used to select a link that is currently active. I have used the <code>background-color</code> property
	to change the background colour of the link to blue. I also used the <code>color</code> property to change the text colour to beige. The idea of this is to reverse the 
	colours that are seen when the link is inactive.</p>
	<hr/>
	
	<h3>Paragraph</h3>
	<p>The p selector in the CSS file is used to set the elements of the paragraphs in the page. I set the <code>text-indent</code> property to 50 pixels, which roughly
	matches the basic indenting in a regular paragraph. I also decided to set the <code>color</code> property to black, which I thought is best for the written parts of the 
	page based on my background colour choice.</p>
	<hr/>
	
	<h3>Code</h3>
	<p>The code selector was used in the CSS file to alter the text elements when the &lt;code&gt; tags are used. In the CSS file, I chose to set the <code>font-size</code>
	property to 16px. I also change the <code>color</code> property to brown.</p>

<?php include 'footer.php'; ?>
