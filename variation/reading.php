<html lang="en">
<?php include '../includes/head.inc.php'; ?>
  <body>
	<?php include '../includes/header.inc.php'; ?>
     <div class="container">
	     <div class="row">
		    <div class="col-xs-12">
			     <div class="blog-post">
				 	<h1>Biostatistics - Variation</h1>
				 	<h2>Overview</h2>
				 	<p>An essential part of data analysis is summarizing the data using descriptive statistics. In addition, visual display of the data enables the researcher to recognize the distribution of the variables and the relationship between different variables. In this session students will be introduced to probabilities laws, variable types and frequency distributions commonly used in clinical research.</p>
				 	<h2>Summary</h2>
				 	<h3>Probabilities</h3>
				 	<p>Product (multiplication) rule
					 <ul>
						 <li>Used to estimate probability of two events</li>
						 <li>Depends on the assumption of independence or not</li>
						 <li>One probability is not influenced by the outcome of another probability i.e. P(A+|B+)= P(A+|B-)</li>
						 <li>Independence assumed</li>
						 <ul>
						 	<li>P(A and B)= P(A) x P(B)</li>
						 </ul>
						 <li>Independence NOT assumed (used in Bayes theorem)</li>
						 <ul>
							 <li>P(A and B)= P(A) x P(B|A) = P(B) x P(A|B)</li>
						 </ul>
						 <li>Addition rule</li>
						 <ul>
							 <li>All possible different probabilities in situation must add to one</li>
							 <li>Mutually exclusive events</li>
							 <ul>
							 	<li>P(A or B)= P(A) + P(B)</li>
							 </ul>
							 <li>Mutually inclusive events (non-mutually exclusive)</li>
							 <ul>
								 <li>Modified addition rule</li>
								 <ul>
									 <li>P(A or B or both)= P(A) + P(B) – P(A and B)</li>
								 </ul>
							 </ul>
						 </ul>
					 </ul>
					 <h3>Types of variables</h3>
					<ul>
						<li>Nominal</li>
						<li>Dichotomous (binary)</li>
						<li>Ordinal (ranked)</li>
						<li>Continuous (interval)</li> 
						<li>Continuous (ratio)</li> 
						<li>Risks and proportions</li>
						<li>Counts and units of observation</li>
					</ul>
					<br />
					
					<ul>
						<li><b>Nominal variables</b>: The simplest scale of measurement. Used for characteristics that have no numerical values, no measurement scales and no rank order. It is also called a categorical or qualitative scale ex. Skin color</li>
						<li><b>Dichotomous</b>: Dichotomous from the Greek “cut into two” variables. Are qualitative variables that have two categories.</li>
						<li><b>Ordinal (ranked)</b>: Are categorical (qualitative) scales of three or more levels. Used for characteristics that have an underlying order to their values; that have clearly implied direction from better to worse.</li>
						<li><b>Numerical (continuous) scales</b>: The highest level of measurement. It is used for characteristics that can be given numerical values; the difference between numbers has meaning, ex. BMI, height.</li>
						<ul>
							<li>Has a value on a continuum</li>
							<ul>
								<li>Interval: arbitrary zero point</li>
								<ul>
									<li>Ex. Centigrade temperature scale</li>
								</ul>
								<li>Ratio: absolute zero point</li>
								<ul>
									<li>Ex. Kalvin temperature scale</li>
								</ul>
							</ul>
						</ul>
						<li><b>Numerical (discrete)</b>: Has values equal to integers. Units of observation: person, animal, thing, etc.…Presented in frequency tables.</li>
						<li><b>Risk</b>: Risk is the conditional probability of an event (e.g. death) in a defined population in a defined period.</li>
						<li><b>Frequency distribution</b>: TABLE of data displaying the VALUE of each data point ( or range of data points) in one column and the FREQUENCY with which that value occurs in the other column/axis or PLOT of data displaying the VALUE of each data point ( or range of data points) on one axis and the FREQUENCY with which that value occurs on the other axis.</li> 
						<li><b>Frequency table</b>: A table showing the number and or the percentages of observations occurring at different values (or range of values) of a variable.</li>
						<li><b>Normal distribution</b>: A symmetric bell-shaped probability distribution with a shape that is determined by mean (&micro;) and standard deviation (σ)</li>
						<li><b>Standard normal distribution</b>: The normal distribution with mean 0 and standard deviation 1</li>
						<li><b>T-distribution</b>: A symmetric distribution with mean 0 and standard deviation larger than that for the normal distribution which is used for small sample sizes. Used if the population standard deviation is unknown</li>
						<li><b>Binomial distribution</b>: The probability distribution that describes the number of successes X observed in ‘n’ independent trials, each with the same probability of occurrence</li>
						<li><b>Chi-square distribution</b>: The distribution used to analyze counts in frequency tables. A nonsymmetrical distribution with mean (µ) and variance (σ2). Used for categorical (nominal) data</li>
					</ul>
					<h2>Additional (Optional) Reading</h2>
				 	<h3><a href="https://www.clinicalkey.com/#!/content/book/3-s2.0-B9781455706587000098?scrollTo=%23s0010">Chapter 9: Describing Data in Variation</a></h3>
				 	<br />
				 	<br />
	      		 </div><!-- /.blog-post -->
	       </div><!-- /.col-xs-12-->
		</div><!--/.row -->
	</div><!-- /.container -->
<?php include '../includes/scripts.inc.php'; ?>
  

</body></html>