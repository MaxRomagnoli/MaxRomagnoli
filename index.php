<!DOCTYPE html>
<html lang="it">
	<head>
		<title>Max Romagnoli</title>
		
		<!-- Bootstrap CSS -->
		<link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="jquery/3.7.1/jquery.min.js"></script>
		<script type="application/javascript" src="helper.js"></script>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="theme-color" content="#B678E6" />
		<meta property="og:image" content="IMG/s13.jpg"/>
		<meta property="og:title" content="Max Romagnoli"/>
		<meta property="og:description" content="TODO" />
		<meta property="og:url" content="https://www.maxromagnoli.com"/>
		<meta property="og:site_name" content="Max Romagnoli"/>
		<meta property="og:type" content="profile"/>
		<meta property="profile:first_name" content="Max">
		<meta property="profile:last_name" content="Romagnoli">
		<meta property="profile:gender" content="male">
		<meta property="profile:username" content="MaxRomagnoli">
		<meta property="og:locale" content="it_IT"/>
	</head>
	<body>
	
	<div class="about-section">
		<h1><a href="javascript:window.location.reload(true)">Max Romagnoli</a></h1>
		<p>Some text about who we are and what we do.</p>
		<!--<p>Resize the browser window to see that this page is responsive by the way.</p>-->
		<div class="icons">
			<a href="javascript:toggleVideogames()" title="Videogames">
				<img src="SVG/games.svg" alt="Videogames"/>
			</a>
			<a href="javascript:assistenzaTecnica()" title="Contattami">
				<img src="SVG/helper_old.svg" alt="Contattami"/>
			</a>
			<a href="javascript:darkMode()" title="Dark mode">
				<img id="dark-img" src="SVG/dark.svg" alt="Dark mode"/>
			</a>
		</div>
	</div>
	
	<!--<div class="topnav">
		<a onclick="closeAssistenzaTecnica();" href="#pilota">Pilota</a>
		<a onclick="closeAssistenzaTecnica();" href="#programmatore">Programmatore</a>
		<a onclick="darkMode()">Dark mode</a>
	</div>-->
	
	<div class="container-xl">
	
		<section class="main">

			<h2 style="text-align:center">Chi è Max Romagnoli?</h2>
			<div class="row">

				<div class="col-md-6" id="pilota">
					<div class="card">
						<img class="card-img-top" id="s13-img" src="IMG/s13.jpg" alt="Nissan S13">
						<div class="card-body">
							<p class="title">Nissan 200SX S13 in drift</p>
							<h3>Pilota</h3>
							<p>Dopo il mio primo corso di drift con <strong>Massimo Nascetti</strong> nel 2015, presso la <strong>Drift Arena</strong>, ho deciso che il drift sarebbe stata la mia ossessione.</p>
							<p>Nel 2016 ho comprato la mia Nissan S13 200SX, purtroppo dopo una serie di disavventure con "meccanici" solo il grandissimo pilota e preparatore <strong>Orlando Fava</strong> poteva salvarla, e ad inizio 2020 era ormai pronta da drift, con un motore completamente ricostruito forgiato, mappata a circa 300cv e 300nm di coppia, con una turbina da 25. Potete guardare il canale YouTube per vedere qualche video di esperienza in pista.</p>
							<p>Se siete interessati a sponsorizzarmi ogni anno posso dare al vostro marchio un'ottima visibilità grazie al <strong>campionato ACSI</strong>.<br>
							Ogni volta che partecipo ad un evento sono attrezzato per ogni evenienza e trasporto sempre l'auto in sicurezza con un carrello di mia proprietà.</p>
							<p>Se volete venire a trovarmi, potete fare un giro da passeggero sotto forma di <strong>Drift Taxi</strong> alla Drift Arena dove tutt'ora continuo ad allenarmi ogni volta che posso.</p>
							<!--<p>
								<a href="https://www.youtube.com/channel/UCsx0S6vuZdqP-4aCEpQPk0g" class="button" target="_blank" rel="nofollow" title="YouTube">
									<img src="SVG/youtube.svg" alt="YouTube"/>
									<span>Video</span>
								</a>
							</p>-->
						</div>
					</div>
				</div>
				
				<div class="col-md-6" id="programmatore">
					<div class="card">
						<img class="card-img-top" id="max-img" src="IMG/max.jpg" alt="Programmatore" />
						<div class="card-body">
							<p class="title">Full Stack Developer</p>
							<h3>Programmatore</h3>
							<p>La mia passione per la programmazione è iniziata nel 2014, studiando come designer di videogames e usando principalmente <strong>Unity 3D</strong> e C#. Nei miei progetti ho spaziato molto dal 2D al 3D, affrontando anche tecnologie complesse come il <strong>VR</strong> e l'<strong>AR</strong></p>
							<p>Dal 2016 ho lavorato molto con middleware come <strong>Laravel</strong> per fare siti internet sia <strong>front end</strong> che <strong>back end</strong>, specializzandomi poi nella creazione di gestionali sempre più complessi. Come linguaggi ho spaziato dall'HTML al Javascript, all'SCSS al PHP.</p>
							<p>Dal 2024 ad oggi sto lavorando su degli applicativi sviluppati con <strong>Ignition</strong> (principalmente usando Java e Python)</p>
							<p>Se ti serve un esempio di quello che so fare, puoi guardare i miei progetti su GitHub oppure puoi contattarmi in qualsiasi momento e ti darò una risposta immediata per risolvere qualsiasi tuo problema.</p>
							<!--<p>
								<button class="button" onclick="assistenzaTecnica()" title="Assistenza tecnica">
									<img src="SVG/helper_old.svg" alt="Assistenza tecnica"/>
									<span>Contattami</span>
								</button>
							</p>-->
						</div>
					</div>
				</div>

			</div>
		
		</section>

		<section class="assistenzaTecnica" style="display:none;">
			<h2 style="text-align:center">Assistenza tecnica</h2>
			<div class="conversation"></div>

			<form action="javascript:ask()" autocomplete="off">
				<div class="question-container">
					<input class="question" type="text" placeholder="Inserisci il tuo nome" />
					<button class="send" type="submit" >Invia</button>
				</div>
			</form>
		
		</section>

		<section class="videogames" style="display:none;">
			<h2 style="text-align:center">Videogames</h2>
			<div class="row">

				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<img class="card-img-top" src="IMG/GGJ/NoSenseParty.png" alt="No sense party">
						<div class="card-body">
							<p class="title">Global Game Jam 2024, tema: "Make me Laugh"</p>
							<h3>No sense party</h3>
							<p>The game is a no sense umoristic FPS, where you have to interact with some strange characters to understand where you are and what you have to do.</p>
							<div class="btn-group">
								<a rel="nofollow" target="_blank" title="Download" href="https://ggjv4.s3.us-west-1.amazonaws.com/files/games/2024/122560/exec/NoSense%20Party.zip" class="btn btn-primary">Download</a>
								<a rel="nofollow" target="_blank" title="Pagina" href="https://globalgamejam.org/games/2024/no-sense-party-8" class="btn btn-secondary">Pagina</a>
								<a rel="nofollow" target="_blank" title="GitHub" href="https://github.com/MaxRomagnoli/GGJ24" class="btn btn-info">GitHub</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<img class="card-img-top" src="IMG/GGJ/AntigravityTrees.png" alt="Antigravity Trees">
						<div class="card-body">
							<p class="title">Global Game Jam 2023, tema: "Roots"</p>
							<h3>Antigravity Trees</h3>
							<p>A game for the Global Game Jam 2023. In a world where trees are anti-gravitational, you are a rabbit, trying to reach his magic hat, that's also a portal to return you home.</p>
							<div class="btn-group">
								<a rel="nofollow" target="_blank" title="Download" href="https://ggj.s3.amazonaws.com/games/2023/02/122560/exec/gOtJQ/AntiGravityTrees.zip" class="btn btn-primary">Download</a>
								<a rel="nofollow" target="_blank" title="Pagina" href="https://v3.globalgamejam.org/2023/games/antigravity-trees" class="btn btn-secondary">Pagina</a>
								<a rel="nofollow" target="_blank" title="GitHub" href="https://github.com/MaxRomagnoli/GGJ23" class="btn btn-info">GitHub</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<img class="card-img-top" src="IMG/GGJ/BipolarHamsters.png" alt="Bipolar Hamsters">
						<div class="card-body">
							<p class="title">Global Game Jam 2022, tema: "Duality"</p>
							<h3>Bipolar Hamsters</h3>
							<p>BiPolar Hamsters is a cartoonish puzzle game about hamsters and violence. Players have to guide the hamsters towards their little house in a tennis-ball, trying to save enough hamsters to win the three levels. BiPolar Hamsters is a physic based game with very simple controls, just using the mouse buttons and it requires players to use positive and negative polarities to solve the ambiental puzzles.</p>
							<div class="btn-group">
								<a rel="nofollow" target="_blank" title="Download" href="https://ggj.s3.amazonaws.com/games/2022/01/427989/src/RISTc/GGJ.zip" class="btn btn-primary">Download</a>
								<a rel="nofollow" target="_blank" title="Pagina" href="https://v3.globalgamejam.org/2022/games/bipolar-hamsters-0" class="btn btn-secondary">Pagina</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<img class="card-img-top" src="IMG/GGJ/LostAirlines.png" alt="Lost Airlines">
						<div class="card-body">
							<p class="title">Global Game Jam 2021, tema: "Lost and Found"</p>
							<h3>Lost Airlines</h3>
							<p>Your flight has been canceled, but your bags will be lost!</p>
							<div class="btn-group">
								<a rel="nofollow" target="_blank" title="Download" href="https://ggj.s3.amazonaws.com/games/2021/02/122560/exec/mSICw/Lost_Airlines.zip" class="btn btn-primary">Download</a>
								<a rel="nofollow" target="_blank" title="Pagina" href="https://v3.globalgamejam.org/2021/games/lost-airlines-0" class="btn btn-secondary">Pagina</a>
								<a rel="nofollow" target="_blank" title="GitHub" href="https://ggj.s3.amazonaws.com/games/2021/02/122560/src/TwJBs/Lost_Airlines_code.zip" class="btn btn-info">Codice</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<img class="card-img-top" src="IMG/GGJ/ZipTime.png" alt="Zip Time">
						<div class="card-body">
							<p class="title">Global Game Jam 2020, tema: "Repair"</p>
							<h3>Zip Time</h3>
							<p></p>
							<div class="btn-group">
								<a rel="nofollow" target="_blank" title="Pagina" href="https://v3.globalgamejam.org/2020/games/zip-time-1" class="btn btn-secondary">Pagina</a>
								<a rel="nofollow" target="_blank" title="GitHub" href="https://ggj.s3.amazonaws.com/games/2020/02/122560/src/W9yEs/ZipTime.zip" class="btn btn-info">Codice</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<img class="card-img-top" src="IMG/GGJ/Momtitasking.png" alt="Momtitasking">
						<div class="card-body">
							<p class="title">Global Game Jam 2019, tema: "What home means to you"</p>
							<h3>Momtitasking</h3>
							<p>Discover the hidden magic of being a mom, desperately trying to complete everyday tasks while her evil son and annoying cat try the best they can to spread chaos around the household.</p>
							<div class="btn-group">
								<a rel="nofollow" target="_blank" title="Download" href="https://ggj.s3.amazonaws.com/games/2019/01/247446/exec/wvons/Build%20Momtitasking.zip" class="btn btn-primary">Download</a>
								<a rel="nofollow" target="_blank" title="Pagina" href="https://v3.globalgamejam.org/2019/games/momtitasking" class="btn btn-secondary">Pagina</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<img class="card-img-top" src="IMG/GGJ/UfoTransmitter.png" alt="Ufo Transmitter">
						<div class="card-body">
							<p class="title">Global Game Jam 2018, tema: "Transmission"</p>
							<h3>Ufo Transmitter</h3>
							<p>In the wild space and stars, there is a mystery! An ufo going fast, in danger probably! Only a rocket survive, the fuel pure fantasy! Transmission gonna die, is just insanity! The controls are fools, they stuck in irony! Only one pull, to control perfectly!</p>
							<div class="btn-group">
								<a rel="nofollow" target="_blank" title="Download" href="https://ggj.s3.amazonaws.com/games/2018/01/122560/exec/gEdCI/Ufo%20Transmitter%20Setup%20%28x86%29.7z" class="btn btn-primary">Download</a>
								<a rel="nofollow" target="_blank" title="Pagina" href="https://v3.globalgamejam.org/2018/games/ufo-transmitter" class="btn btn-secondary">Pagina</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<img class="card-img-top" src="IMG/GGJ/TheBottle.png" alt="The Bottle">
						<div class="card-body">
							<p class="title">Global Game Jam 2017, tema: "Waves"</p>
							<h3>The Bottle</h3>
							<p>Purtroppo questo gioco lo abbiamo sviluppato con degli amici in remoto, quindi non è "ufficialmente" nella global Game Jam, anche se abbiamo rispettato tutte le regole e le scadenze del caso.</p>
							<p>Il tuo compito è muovere una bottiglia galleggiante, generando onde cliccando lo schermo. Dentro la bottiglia c'è un messaggio scritto da un naufrago che lo porterà alla salvezza se raggiunta la destinazione. Oltre l'ostacolo di capire la direzione da prendere, il giocatore deve evitare rocce, squali e vortici.</p>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<img class="card-img-top" src="IMG/GGJ/Addiction.png" alt="Addiction">
						<div class="card-body">
							<p class="title">Global Game Jam 2016, tema: "Ritual"</p>
							<h3>Addiction</h3>
							<p>Il gioco è ambientato nella location dove lo avevamo sviluppato, grazie ai meticolosi modellatori 3D. Il tuo compito nel gioco, è combattere l'astinenza da fumo, scappando da mostri e fantasmi, che possono essere combattuti accumulando mozziconi di sigaretta nascosti nella mappa, dai quali puoi estrarre una piccola dose di nicotina.</p>
							<div class="btn-group">
								<a rel="nofollow" target="_blank" title="Download" href="https://ggj.s3.amazonaws.com/games/2016/01/31/1622/Addiction%20Build.7z" class="btn btn-primary">Download</a>
								<a rel="nofollow" target="_blank" title="Pagina" href="https://v3.globalgamejam.org/2016/games/addiction" class="btn btn-secondary">Pagina</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-sm-6 col-lg-4">
					<div class="card">
						<img class="card-img-top" src="IMG/GGJ/FieraSimulator.jpg" alt="Fiera Simulator">
						<div class="card-body">
							<p class="title">Global Game Jam 2015, tema: "What do we do now?"</p>
							<h3>Fiera Simulator</h3>
							<p>Il mio primo gioco durante alla Global Game Jam, purtroppo non è più presente il codice sorgente ne l'eseguibile del gioco.</p>
							<p>Il gameplay del gioco era spostarsi durante una fiera, dovendo svolgere una serie di compiti, con la folla ad ostacolarti.</p>
							<div class="btn-group">
								<a rel="nofollow" target="_blank" title="Pagina" href="https://v3.globalgamejam.org/2015/games/fiera-simulator" class="btn btn-secondary">Pagina</a>
							</div>
						</div>
					</div>
				</div>
				
		</section
		
	</div>
	
	<footer>
		<div class="icons">
			<a href="https://www.youtube.com/channel/UCsx0S6vuZdqP-4aCEpQPk0g" target="_blank" rel="nofollow" title="YouTube">
				<img src="SVG/youtube.svg" alt="YouTube"/>
			</a>
			<a href="https://www.facebook.com/massimo.romagnoli/" target="_blank" rel="nofollow" title="Facebook">
				<img src="SVG/facebook.svg" alt="Facebook"/>
			</a>
			<a href="https://www.instagram.com/maxromagnoli" target="_blank" rel="nofollow" title="Instagram">
				<img src="SVG/instagram.svg" alt="Instagram"/>
			</a>
			<a href="https://v3.globalgamejam.org/users/massimo-romagnoli" target="_blank" rel="nofollow" title="Global Game Jam">
				<img src="SVG/GGJ.svg" alt="Global Game Jam"/>
			</a>
			<a href="https://github.com/MaxRomagnoli" target="_blank" rel="nofollow" title="GitHub">
				<img src="SVG/github_old.svg" alt="GitHub"/>
			</a>
			<a href="https://www.instructables.com/member/MaxRomagnoli/" target="_blank" rel="nofollow" title="Instructables">
				<img src="SVG/hardware.svg" alt="Instructables"/>
			</a>
			<a href="https://it.linkedin.com/in/max-romagnoli?trk=public_profile_browsemap-profile" target="_blank" rel="nofollow" title="Linkedin">
				<img src="SVG/linkedin.svg" alt="Linkedin"/>
			</a>
		</div>
		<p>Design by Max Romagnoli 2024</p>
	</footer>

	</body>
</html>
