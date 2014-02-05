 <?php

/*
*	Filename: add_material_view.php
*	Project Name: ICS Library System
*	Date Created: 29 January 2014
*	Created by: Mac Emerson B. Reyes
*
*/	

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> ICSLibrarySystem : Add Material </title>
	</head>

	<body>
		<div id="container">
		<form method="post">
			<label for="materialid">L. Mat. ID</label>
			<input type="text" name="materialid" pattern="[A-Za-z0-9]+-[A-Za-z0-9]+" required><br>
			<label for="course">Course Classification</label>
			<select name="course" required>
				<option value=""> </option>
				<option value="CS1">CMSC 1</option>
				<option value="CS2">CMSC 2</option>
				<option value="CS11">CMSC 11</option>
				<option value="CS21">CMSC 21</option>
				<option value="CS22">CMSC 22</option>
				<option value="CS55">CMSC 55</option>
				<option value="CS56">CMSC 56</option>
				<option value="CS57">CMSC 57</option>
				<option value="CS100">CMSC 100</option>
				<option value="CS123">CMSC 123</option>
				<option value="CS124">CMSC 124</option>
				<option value="CS125">CMSC 125</option>
				<option value="CS127">CMSC 127</option>
				<option value="CS128">CMSC 128</option>
				<option value="CS129">CMSC 129</option>
				<option value="CS130">CMSC 130</option>
				<option value="CS131">CMSC 131</option>
				<option value="CS132">CMSC 132</option>
				<option value="CS137">CMSC 137</option>
				<option value="CS140">CMSC 140</option>
				<option value="CS141">CMSC 141</option>
				<option value="CS142">CMSC 142</option>
				<option value="CS150">CMSC 150</option>
				<option value="CS161">CMSC 161</option>
				<option value="CS165">CMSC 165</option>
				<option value="CS170">CMSC 170</option>
				<option value="CS178">CMSC 172</option>
				<option value="CS180">CMSC 180</option>
				<option value="CS191">CMSC 191</option>
			</select><br>
			<label for="type">Type</label>
			<select name="type" required>
				<option value=""> </option>
				<option value="Book">Book</option>
				<option value="SP">SP</option>
				<option value="Reference">Reference</option>
				<option value="CD">CD</option>
				<option value="Journals">Journals</option>
				<option value="Magazines">Magazines</option>
			</select><br>
			<label for="name">Title</label>
			<input type="text" name="name" required><br>
			<label for="author">Author</label>
			<input type="text" name="fname" pattern="[A-Za-z0-9]+" placeholder="First Name" required>
			<input type="text" name="mname" pattern="[A-Za-z0-9]+" placeholder="Middle Name" required>
			<input type="text" name="lname" pattern="[A-Za-z0-9]+" placeholder="Last Name" required><br>
			<label for="year">Year of Publication</label>
			<select name="year" required>
				<option value=""> </option>
				<option value="1988">1917</option>
				<option value="1988">1918</option>
				<option value="1988">1919</option>
				<option value="1988">1920</option>
				<option value="1988">1921</option>
				<option value="1988">1922</option>
				<option value="1988">1923</option>
				<option value="1988">1924</option>
				<option value="1988">1925</option>
				<option value="1988">1926</option>
				<option value="1988">1927</option>
				<option value="1988">1928</option>
				<option value="1988">1929</option>
				<option value="1988">1930</option>
				<option value="1988">1931</option>
				<option value="1988">1932</option>
				<option value="1988">1933</option>
				<option value="1988">1934</option>
				<option value="1988">1935</option>
				<option value="1988">1936</option>
				<option value="1988">1937</option>
				<option value="1988">1938</option>
				<option value="1988">1939</option>
				<option value="1988">1940</option>
				<option value="1988">1941</option>
				<option value="1988">1942</option>
				<option value="1988">1943</option>
				<option value="1988">1944</option>
				<option value="1988">1945</option>
				<option value="1988">1946</option>
				<option value="1988">1947</option>
				<option value="1988">1948</option>
				<option value="1988">1949</option>
				<option value="1988">1950</option>
				<option value="1988">1951</option>
				<option value="1988">1952</option>
				<option value="1988">1953</option>
				<option value="1988">1954</option>
				<option value="1988">1955</option>
				<option value="1988">1956</option>
				<option value="1988">1957</option>
				<option value="1988">1958</option>
				<option value="1988">1959</option>
				<option value="1988">1960</option>
				<option value="1988">1961</option>
				<option value="1988">1962</option>
				<option value="1988">1963</option>
				<option value="1988">1964</option>
				<option value="1988">1965</option>
				<option value="1988">1966</option>
				<option value="1988">1967</option>
				<option value="1988">1968</option>
				<option value="1988">1969</option>
				<option value="1988">1970</option>
				<option value="1988">1971</option>
				<option value="1988">1972</option>
				<option value="1988">1973</option>
				<option value="1988">1974</option>
				<option value="1988">1975</option>
				<option value="1988">1976</option>
				<option value="1988">1977</option>
				<option value="1988">1978</option>
				<option value="1988">1979</option>
				<option value="1988">1980</option>
				<option value="1988">1981</option>
				<option value="1988">1982</option>
				<option value="1988">1983</option>
				<option value="1988">1984</option>
				<option value="1988">1985</option>
				<option value="1988">1986</option>
				<option value="1988">1987</option>
				<option value="1988">1988</option>
				<option value="1989">1989</option>
				<option value="1990">1990</option>
				<option value="1991">1991</option>
				<option value="1992">1992</option>
				<option value="1993">1993</option>
				<option value="1994">1994</option>
				<option value="1995">1995</option>
				<option value="1996">1996</option>
				<option value="1997">1997</option>
				<option value="1998">1998</option>
				<option value="1999">1999</option>
				<option value="2000">2000</option>
				<option value="2001">2001</option>
				<option value="2002">2002</option>
				<option value="2003">2003</option>
				<option value="2004">2004</option>
				<option value="2005">2005</option>
				<option value="2006">2006</option>
				<option value="2007">2007</option>
				<option value="2008">2008</option>
				<option value="2009">2009</option>
				<option value="2010">2010</option>
				<option value="2011">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
			</select><br>
			<label for="edvol">Edition(optional)</label>
			<select name="edvol">
				<option value=""> </option>
				<option value="1">First</option>
				<option value="2">Second</option>
				<option value="3">Third</option>
				<option value="4">Fourth</option>
				<option value="5">Fifth</option>
				<option value="6">Sixth</option>
				<option value="7">Seventh</option>
				<option value="8">Eighth</option>
				<option value="9">Ninth</option>
				<option value="10">Tenth</option>
			</select><br>
			<label for="access">Accessibility</label>
			<select name="access" required>
				<option value=""> </option>
				<option value="1">Room Use</option>
				<option value="2">Student</option>
				<option value="3">Faculty</option>
				<option value="4">Student/Faculty</option>
			</select><br>
			<label for="availability">Availability</label>
			<input type="radio" name="available" value="1" required> Yes
			<input type="radio" name="available" value="0"> No<br>
			<label for="requirement">Requirements</label>
			<input type="radio" name="requirement" value="0" required> Letter of the Owner
			<input type="radio" name="requirement" value="1"> Consent of Instructor<br>
			<input type="submit" name="insert">
		</form><br>
		<a href='../admin'> Home </a><br>
		</div>
	</body>
</html>