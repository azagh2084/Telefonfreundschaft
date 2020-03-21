<?php
	require_once('./inc/head.inc.php');
	require_once('./inc/header.inc.php');
?>
		<!-- Banner -->
			<section id="banner">
				<header>
					<h2>GemeinsamZusammen</h2>
				</header>
				<p><big>Du fühlst dich einsam?</big><br>Diese Seite ist für alle, die sich mehr soziale Interaktionen wünschen und nicht wissen, woher sie diese bekommen können.</p>
				<footer>
					<a href="#first" class="button style2 scrolly">Ich möchte telefonieren</a>
				</footer>
			</section>

		<!-- Feature 1 -->
			<article id="first" class="container box style1 right">
				<a href="#" class="image fit"><img src="images/old_phone.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<h2>Wie entstand die Idee?</h2>
					</header>
					<p>
						“eine Freundin meinte, sie hat sich so auf Uni gefreut, weil sie dann endlich wieder Struktur hat und das jetzt leider wegfällt. Ich habe ihr vorgeschlagen, dass ich sie jeden morgen zur gleichen Uhrzeit anrufen kann und das funktioniert bis jetzt sehr gut.”<br>
						Und was machen Menschen, denen es an Freund*Innen fehlt, die Situationen wie diese auffangen?
					</p>
				</div>
			</article>

		<!-- Feature 2 -->
			<article class="container box style1 left">
				<a href="#" class="image fit"><img src="images/people_network.jpg" alt="" /></a>
				<div class="inner">
					<header>
						<h2>Mit wem wirst du telefonieren?</h2>
					</header>
					<p>Geht es dir gerade schlecht, wirst du mit jemandem telefonieren der schon länger dabei ist und der vertrauenswürdig ist. Geht es dir gut, wirst du mit Leuten die neu dabei sind telefonieren können. Bei Missbrauchsfällen wird die Telefonnummer gesperrt und ggf. rechtliche verfahren eingeleitet.<br>
					Du kannst den Leuten hier also vertrauen. 😊</p>
				</div>
			</article>

		<!-- Portfolio -->
			<!--<article class="container box style2">
				<header>
					<h2>Magnis parturient</h2>
					<p>Justo phasellus et aenean dignissim<br />
					placerat cubilia purus lectus.</p>
				</header>
				<div class="inner gallery">
					<div class="row gtr-0">
						<div class="col-3 col-12-mobile"><a href="images/fulls/01.jpg" class="image fit"><img src="images/thumbs/01.jpg" alt="" title="Ad infinitum" /></a></div>
						<div class="col-3 col-12-mobile"><a href="images/fulls/02.jpg" class="image fit"><img src="images/thumbs/02.jpg" alt="" title="Dressed in Clarity" /></a></div>
						<div class="col-3 col-12-mobile"><a href="images/fulls/03.jpg" class="image fit"><img src="images/thumbs/03.jpg" alt="" title="Raven" /></a></div>
						<div class="col-3 col-12-mobile"><a href="images/fulls/04.jpg" class="image fit"><img src="images/thumbs/04.jpg" alt="" title="I'll have a cup of Disneyland, please" /></a></div>
					</div>
					<div class="row gtr-0">
						<div class="col-3 col-12-mobile"><a href="images/fulls/05.jpg" class="image fit"><img src="images/thumbs/05.jpg" alt="" title="Cherish" /></a></div>
						<div class="col-3 col-12-mobile"><a href="images/fulls/06.jpg" class="image fit"><img src="images/thumbs/06.jpg" alt="" title="Different." /></a></div>
						<div class="col-3 col-12-mobile"><a href="images/fulls/07.jpg" class="image fit"><img src="images/thumbs/07.jpg" alt="" title="History was made here" /></a></div>
						<div class="col-3 col-12-mobile"><a href="images/fulls/08.jpg" class="image fit"><img src="images/thumbs/08.jpg" alt="" title="People come and go and walk away" /></a></div>
					</div>
				</div>
			</article>-->

		<!-- Register -->
			<article class="container box style3">
				<header>
					<h2>Jetzt mitmachen</h2>
					<p>Nur noch ein paar Schritte, dann bist du dabei:</p>
				</header>
				<form method="post">
					<div class="row gtr-50">
						<div class="col-6 col-12-mobile">
							<input type="text" class="text" name="callname" placeholder="Wie sollen wir dich nennen?" pattern="[A-Za-z][a-z]*" minlenght="2" maxlength="32" required/>
						</div>
						<div class="col-6 col-12-mobile">
							<input type="text" class="text" name="lastname" placeholder="Nachname (optional)" pattern="[A-Za-z][a-z]*" minlenght="2" maxlength="32"/>
						</div>
						<div class="col-6 col-12-mobile">
							<input type="email" class="text" name="email" placeholder="E-Mail" required/>
						</div>
						<div class="col-6 col-12-mobile">
							<select name="age" required>
								<option value="">Wähle aus wie alt du bist</option>
								<option value="0">Keine Angabe</option>
								<option value="18">18 Jahre</option>
								<option value="19">19 Jahre</option>
								<option value="20">20 Jahre</option>
								<option value="21">20 Jahre</option>
								<option value="22">20 Jahre</option>
								<option value="23">20 Jahre</option>
								<option value="24">20 Jahre</option>
								<option value="25">20 Jahre</option>
								<option value="26">20 Jahre</option>
								<option value="27">20 Jahre</option>
								<option value="28">20 Jahre</option>
								<option value="29">20 Jahre</option>
								<option value="30">20 Jahre</option>
								<option value="31">20 Jahre</option>
								<option value="32">20 Jahre</option>
								<option value="33">33 Jahre</option>
								<option value="34">34 Jahre</option>
								<option value="35">35 Jahre</option>
								<option value="35">35 Jahre</option>
								<option value="36">36 Jahre</option>
								<option value="37">37 Jahre</option>
								<option value="38">38 Jahre</option>
								<option value="39">39 Jahre</option>
								<option value="40">40 Jahre</option>
								<option value="41">41 Jahre</option>
								<option value="42">42 Jahre</option>
								<option value="43">43 Jahre</option>
								<option value="44">44 Jahre</option>
								<option value="45">45 Jahre</option>
								<option value="46">46 Jahre</option>
								<option value="47">47 Jahre</option>
								<option value="48">48 Jahre</option>
								<option value="49">49 Jahre</option>
								<option value="50">50 Jahre</option>
								<option value="51">51 Jahre</option>
								<option value="52">52 Jahre</option>
								<option value="53">53 Jahre</option>
								<option value="54">54 Jahre</option>
								<option value="55">55 Jahre</option>
								<option value="56">56 Jahre</option>
								<option value="57">57 Jahre</option>
								<option value="58">58 Jahre</option>
								<option value="59">59 Jahre</option>
								<option value="60">60 Jahre</option>
								<option value="61">61 Jahre</option>
								<option value="62">62 Jahre</option>
								<option value="63">63 Jahre</option>
								<option value="64">64 Jahre</option>
								<option value="65">65 Jahre</option>
								<option value="66">66 Jahre</option>
								<option value="67">67 Jahre</option>
								<option value="68">68 Jahre</option>
								<option value="69">69 Jahre</option>
								<option value="70">70 Jahre</option>
								<option value="71">71 Jahre</option>
								<option value="72">72 Jahre</option>
								<option value="73">73 Jahre</option>
								<option value="74">74 Jahre</option>
								<option value="75">75 Jahre</option>
								<option value="76">76 Jahre</option>
								<option value="77">77 Jahre</option>
								<option value="78">78 Jahre</option>
								<option value="79">79 Jahre</option>
								<option value="80">80 Jahre</option>
								<option value="81">81 Jahre</option>
								<option value="82">82 Jahre</option>
								<option value="83">83 Jahre</option>
								<option value="84">84 Jahre</option>
								<option value="85">85 Jahre</option>
								<option value="86">86 Jahre</option>
								<option value="87">87 Jahre</option>
								<option value="88">88 Jahre</option>
								<option value="89">89 Jahre</option>
								<option value="90">90 Jahre</option>
								<option value="91">91 Jahre</option>
								<option value="92">92 Jahre</option>
								<option value="93">93 Jahre</option>
								<option value="94">94 Jahre</option>
								<option value="95">95 Jahre</option>
								<option value="96">96 Jahre</option>
								<option value="97">97 Jahre</option>
								<option value="98">98 Jahre</option>
								<option value="99">99 Jahre</option>
								<option value="100">100 Jahre</option>
								<option value="101">101 Jahre</option>
								<option value="102">102 Jahre</option>
								<option value="103">103 Jahre</option>
								<option value="104">104 Jahre</option>
								<option value="105">105 Jahre</option>
								<option value="106">106 Jahre</option>
								<option value="107">107 Jahre</option>
								<option value="108">108 Jahre</option>
								<option value="109">109 Jahre</option>
								<option value="110">110 Jahre</option>
								<option value="111">111 Jahre</option>
								<option value="112">112 Jahre</option>
								<option value="113">114 Jahre</option>
								<option value="115">115 Jahre</option>
							</select>
						</div>
						<div class="col-6 col-12-mobile">
							<select name="gender">
								<option value="">Wähle dein Geschlecht aus (optional)</option>
								<option value="0">Keine Angabe</option>
								<option value="female">Weiblich</option>
								<option value="male">Männlich</option>
								<option value="divers">Divers</option>
							</select>
						</div>
						<div class="col-6 col-12-mobile">
							<input type="tel" class="text" name="phone_number" placeholder="Deine Handynummer" maxlength="16" required/>
						</div>
						<div class="col-6 col-12-mobile">
							<input type="password" class="password" name="password" placeholder="Passwort" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" minlenght="8" required/>
						</div>
						<div class="col-6 col-12-mobile">
							<input type="password" class="password" name="password_repeat" placeholder="Passwort (Wiederholen)" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" minlenght="8" required/>
						</div>
						<div class="col-6 col-12-mobile">
							<input type="text" class="text" name="town" placeholder="Wohnort (optional)" maxlength="32" required/>
						</div>
						<div class="col-12">
							<textarea name="message" placeholder="Deine Motivation" maxlength="512"></textarea>
						</div>
						<label for="captcha" style="display: none;"> <?php echo strval(random_int(1,99)).'+'.strval(random_int(1,99)); ?>
							<input type="text" name="captcha" id="captcha" style="display: none;">
						</label>
						<div class="col-12">
							<ul class="actions">
								<li><input type="submit" name="register" value="Jetzt registrieren"/></li>
							</ul>
						</div>
					</div>
				</form>
			</article>

		<!-- Generic -->
			<article class="container box style3">
				<header>
					<h2>Generic Box</h2>
					<p>Just a generic box. Nothing to see here.</p>
				</header>
				<section>
					<header>
						<h3>Paragraph</h3>
						<p>This is a subtitle</p>
					</header>
					<p>Phasellus nisl nisl, varius id <sup>porttitor sed pellentesque</sup> ac orci. Pellentesque
					habitant <strong>strong</strong> tristique <b>bold</b> et netus <i>italic</i> malesuada <em>emphasized</em> ac turpis egestas. Morbi
					leo suscipit ut. Praesent <sub>id turpis vitae</sub> turpis pretium ultricies. Vestibulum sit
					amet risus elit.</p>
				</section>
				<section>
					<header>
						<h3>Blockquote</h3>
					</header>
					<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget.
					tempus euismod. Vestibulum ante ipsum primis in faucibus.</blockquote>
				</section>
				<section>
					<header>
						<h3>Divider</h3>
					</header>
					<p>Donec consectetur <a href="#">vestibulum dolor et pulvinar</a>. Etiam vel felis enim, at viverra
					ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
					facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
					tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
					posuere cubilia.</p>
					<hr />
					<p>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra
					ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
					facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
					tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
					posuere cubilia.</p>
				</section>
				<section>
					<header>
						<h3>Unordered List</h3>
					</header>
					<ul>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
					</ul>
				</section>
				<section>
					<header>
						<h3>Ordered List</h3>
					</header>
					<ol>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
					</ol>
				</section>
				<section>
					<header>
						<h3>Table</h3>
					</header>
					<div class="table-wrapper">
						<table>
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>
									<th>Description</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>45815</td>
									<td>Something</td>
									<td>Ut porttitor sagittis lorem quis nisi ornare.</td>
									<td>29.99</td>
								</tr>
								<tr>
									<td>24524</td>
									<td>Nothing</td>
									<td>Ut porttitor sagittis lorem quis nisi ornare.</td>
									<td>19.99</td>
								</tr>
								<tr>
									<td>45815</td>
									<td>Something</td>
									<td>Ut porttitor sagittis lorem quis nisi ornare.</td>
									<td>29.99</td>
								</tr>
								<tr>
									<td>24524</td>
									<td>Nothing</td>
									<td>Ut porttitor sagittis lorem quis nisi ornare.</td>
									<td>19.99</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<td colspan="3"></td>
									<td>100.00</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</section>
				<section>
					<header>
						<h3>Form</h3>
					</header>
					<form method="post" action="#">
						<div class="row">
							<div class="col-6 col-12-mobile">
								<input class="text" type="text" name="name" id="name" value="" placeholder="John Doe" />
							</div>
							<div class="col-6 col-12-mobile">
								<input class="text" type="text" name="email" id="email" value="" placeholder="johndoe@domain.tld" />
							</div>
							<div class="col-12">
								<select name="department" id="department">
									<option value="">Choose a department</option>
									<option value="1">Manufacturing</option>
									<option value="2">Administration</option>
									<option value="3">Support</option>
								</select>
							</div>
							<div class="col-12">
								<input class="text" type="text" name="subject" id="subject" value="" placeholder="Enter your subject" />
							</div>
							<div class="col-12">
								<textarea name="message" id="message" placeholder="Enter your message"></textarea>
							</div>
							<div class="col-12">
								<ul class="actions">
									<li><input type="submit" value="Submit" /></li>
									<li><input type="reset" class="style3" value="Clear Form" /></li>
								</ul>
							</div>
						</div>
					</form>
				</section>
			</article>

		<section id="footer">
			<ul class="icons">
				<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon brands fa-google-plus-g"><span class="label">Google+</span></a></li>
				<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
				<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
				<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
			</ul>
			<div class="copyright">
				<ul class="menu">
					<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
		</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
