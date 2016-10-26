<div id="sidebar">
	<div id="sidebar1">
		<div class="sidebar1gambar"></div>
		<div class="sidebar1isi">
			<pre>
			
Stadion  : Stadion FirstEnergy
Pelatih  : <a href="">Hue Jackson</a>
Maskot 	 : Chomps
Lagu tim : <a href="">Hi-O-Hi-O for Cleveland</a>
Pendiri  : <a href="">Arthur B. McBride</a>
Didirikan: 1946
			</pre>
		</div>
	</div> <!-- sidebar1 -->
	<div id="sidebar2">
		<h2>Follow Us</h2><hr color="grey">
		<div id="sidebar2-wrapper">
			<p style="margin-left: 13px;">Were this world an endless plain, and by sailing eastward we could for ever reach new distances</p>
		<div class="social-wrapper">
			<div class="sidebar2-social">
				<a href="" title="Facebook"><div class="social-image-size facebook" ></div></a>
				<a href="" title="Twitter"><div class="social-image-size twitter" ></div></a>
				<a href="" title="RSS"><div class="social-image-size rss" ></div></a>
				<a href="" title="Flickr"><div class="social-image-size flickr"  ></div></a>
				<a href="" title="Youtube"><div class="social-image-size youtube" ></div></a>
				<a href="" title="Vimeo"><div class="social-image-size vimeo" ></div></a>
				<a href="" title="Linkedin"><div class="social-image-size linkedin" ></div></a>
				<a href="" title="Tumblr"><div class="social-image-size tumblr" ></div></a>
				<a href="" title="Dribbble"><div class="social-image-size dribbble" ></div></a>
				<a href="" title="Google Plus"><div class="social-image-size gplus" ></div></a>
				<a href="" title="Pinterest"><div class="social-image-size pinterest" ></div></a>
				<a href="" title="Instagram"><div class="social-image-size instagram" ></div></a>
			<div class="clearfix"></div>
			</div>
		</div>
		</div>
	</div>

	<div id="sidebar3">
		<div id="sidebar3-wrapper">
		<h2>Popular Post</h2><hr color="grey"><br>
			<ul>
				<?php 
				$id = $_GET['hal'];
				$array = read\tampilPop::tampilPopular($id);
				foreach ($array as $data) {
				?>
				<li>
					
					<a href="artikel.php?hal=<?php echo $id?>&id=<?php echo $data['id_artikel']?>" ><?php echo $data['art_judul']?></a>
				
				</li>
				<?php  }?>
			</ul>
		</div>
	</div>

</div> <!-- sidebar -->