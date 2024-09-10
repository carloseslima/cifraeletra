<header>
	
	<!-- Meta Pixel Code -->
<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '235943629497348');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=235943629497348&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Meta Pixel Code -->

	<nav id="top-bar">		
		<input type="checkbox" name="" id="input-menu1">
		<label id="label-menu1" for="input-menu1">
			<div>
				<span class="linha"></span>
				<span class="linha"></span>
				<span class="linha"></span>
			</div>
			<p>Estilos</p>
		</label>

		<div id="fundoEscuro" class="escondido"></div>		
		
		<div id="menu1">
			<input type="checkbox" name="" id="input-close-menu1">
			<label id="close-menu1" for="input-menu1"><i class="fa-solid fa-circle-xmark"></i><p>Estilos</p></label>
			<a href="/">Início</a>
			<a href="/estilos/alternativo.php">Alternativo</a>
			<a href="/estilos/axe.php">Axé</a>
			<a href="/estilos/brega.php">Brega</a>
			<a href="/estilos/catolicas.php">Católicas</a>
			<a href="/estilos/forro.php">Forró</a>
			<a href="/estilos/funk.php">Funk</a>
			<a href="/estilos/gospel.php">Gospel</a>
			<a href="/estilos/hip-hop-rap.php">Hip-Hop/Rap</a>
			<a href="/estilos/mpb.php">MPB</a>
			<a href="/estilos/pop-rock.php">Pop-Rock</a>
			<a href="/estilos/pop.php">Pop</a>
			<a href="/estilos/rock.php">Rock</a>
			<a href="/estilos/samba-e-pagode.php">Samba e Pagode</a>
			<a href="/estilos/sertanejo.php">Sertanejo</a>
			<a href="#">Outros</a>
			<a href="/blog">Blog</a>
		</div>

		<script>
			var checkbox = document.getElementById('input-menu1');
			var fundoEscuro = document.getElementById('fundoEscuro');
			var menu1 = document.getElementById('menu1');
			
			checkbox.addEventListener('change', function() {
				if (this.checked) {
					fundoEscuro.classList.remove('escondido');
					menu1.classList.remove('escondido');
				} else {
					fundoEscuro.classList.add('escondido');
					menu1.classList.add('escondido');
				}
			});
			
			fundoEscuro.addEventListener('click', function() {
				checkbox.checked = false;
				fundoEscuro.classList.add('escondido');
				menu1.classList.add('escondido');
			});
		</script>

		<a id="link-logo" href="/">
			<img id="img-logo" src="/imagens/logo.webp" alt="logo">
		</a>
		
		<input type="checkbox" name="" id="input-bot-pesquisa">
		<label id="bot-pesquisa" for="input-bot-pesquisa">
			<i class="fa-solid fa-magnifying-glass"></i>
		</label>
		
		<div id="pesquisa">
			<label id="close-pesquisa" for="input-bot-pesquisa">X</label>
			<script async src="https://cse.google.com/cse.js?cx=24f6fc975ecd74c76"></script>
			<div class="gcse-search"></div>
		</div>

		<input type="checkbox" name="" id="input-menu2">
		<label id="label-menu2" for="input-menu2">
			<span id="abc"><p id="menu-abc1">Menu</p><strong><p id="menu-abc2">ABC</p></strong></span>
		</label>

		<div id="fundoEscuro2" class="escondido"></div>	
		
		<div id="menu2">
			<input type="checkbox" name="" id="input-close-menu2">
			<label id="close-menu2" for="input-menu2">Ordem Alfabética<i class="fa-solid fa-circle-xmark"></i></label>
			<a href="/letras/a.php">A</a>
			<a href="/letras/b.php">B</a>
			<a href="/letras/c.php">C</a>
			<a href="/letras/d.php">D</a>
			<a href="/letras/e.php">E</a>
			<a href="/letras/f.php">F</a>
			<a href="/letras/g.php">G</a>
			<a href="/letras/h.php">H</a>
			<a href="/letras/i.php">I</a>
			<a href="/letras/j.php">J</a>
			<a href="/letras/k.php">K</a>
			<a href="/letras/l.php">L</a>
			<a href="/letras/m.php">M</a>
			<a href="/letras/n.php">N</a>
			<a href="/letras/o.php">O</a>
			<a href="/letras/p.php">P</a>
			<a href="/letras/q.php">Q</a>
			<a href="/letras/r.php">R</a>
			<a href="/letras/s.php">S</a>
			<a href="/letras/t.php">T</a>
			<a href="/letras/u.php">U</a>
			<a href="/letras/v.php">V</a>
			<a href="/letras/w.php">W</a>
			<a href="/letras/x.php">X</a>
			<a href="/letras/y.php">Y</a>
			<a href="/letras/z.php">Z</a>
			<a href="/letras/0-9.php">0-9</a>
		</div>

		<script>
			var checkbox2 = document.getElementById('input-menu2');
			var fundoEscuro2 = document.getElementById('fundoEscuro2');
			var menu2 = document.getElementById('menu2');
			
			checkbox2.addEventListener('change', function() {
				if (this.checked) {
					fundoEscuro2.classList.remove('escondido');
					menu2.classList.remove('escondido');
				} else {
					fundoEscuro2.classList.add('escondido');
					menu2.classList.add('escondido');
				}
			});
			
			fundoEscuro2.addEventListener('click', function() {
				checkbox2.checked = false;
				fundoEscuro2.classList.add('escondido');
				menu2.classList.add('escondido');
			});
		</script>

	</nav>
</header>