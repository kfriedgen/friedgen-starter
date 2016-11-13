<?php
/**
 * Template Name: Pattern Lab Template
 */
?>

<div class="c-pattern-lab">
	
	<div class="c-pattern-lab__color-outer">

		<h2 class="c-pattern-lab__section-title">
			Brand Colors
		</h2>

		<ul class="c-pattern-lab__color-inner c-pattern-lab__color-inner--brand">

			<li class="c-pattern-lab__color c-pattern-lab__color--first">
				
				<div class="c-pattern-lab__color-block"></div>

				<div class="c-pattern-lab__color-name">
					$red
				</div>
				
				<div class="c-pattern-lab__color-hex">
					#ff0000
				</div>
			
			</li>

			<li class="c-pattern-lab__color c-pattern-lab__color--second">

				<div class="c-pattern-lab__color-block"></div>

				<div class="c-pattern-lab__color-name">
					$green
				</div>
				
				<div class="c-pattern-lab__color-hex">
					#008000
				</div>
			
			</li>

			<li class="c-pattern-lab__color c-pattern-lab__color--third">
				
				<div class="c-pattern-lab__color-block"></div>

				<div class="c-pattern-lab__color-name">
					$gold
				</div>
				
				<div class="c-pattern-lab__color-hex">
					#ffd700
				</div>
			
			</li>

		</ul>

	</div>

	<div class="c-pattern-lab__color-outer">

		<h2 class="c-pattern-lab__section-title">
			UI Colors
		</h2>

		<ul class="c-pattern-lab__color-inner c-pattern-lab__color-inner--ui">

			<li class="c-pattern-lab__color c-pattern-lab__color--first">
				
				<div class="c-pattern-lab__color-block"></div>

				<div class="c-pattern-lab__color-name">
					$dark-grey
				</div>
				
				<div class="c-pattern-lab__color-hex">
					#8c8c8c
				</div>
			
			</li>

			<li class="c-pattern-lab__color c-pattern-lab__color--second">
				
				<div class="c-pattern-lab__color-block"></div>

				<div class="c-pattern-lab__color-name">
					$blue
				</div>
				
				<div class="c-pattern-lab__color-hex">
					#0000ff
				</div>
			
			</li>

			<li class="c-pattern-lab__color c-pattern-lab__color--third">
				
				<div class="c-pattern-lab__color-block"></div>

				<div class="c-pattern-lab__color-name">
					$pink
				</div>
				
				<div class="c-pattern-lab__color-hex">
					#ffc0cb
				</div>
			
			</li>

			<li class="c-pattern-lab__color c-pattern-lab__color--fourth">
				
				<div class="c-pattern-lab__color-block"></div>

				<div class="c-pattern-lab__color-name">
					$white
				</div>
				
				<div class="c-pattern-lab__color-hex">
					#ffffff
				</div>
			
			</li>

		</ul>

	</div>

	<div class="c-pattern-lab__font">

		<h2 class="c-pattern-lab__section-title">
			Fonts
		</h2>
		
		<p class="c-pattern-lab__font-primary">Primary Font: Example of a Font Name</p>
		<p class="c-pattern-lab__font-primary"><em>Primary Font: Example of a Font Name</em></p>
		<p class="c-pattern-lab__font-primary"><strong>Primary Font: Example of a Font Name</strong></p>

		<p class="c-pattern-lab__font-secondary">Secondary Font: Example of a Font Name</p>
		<p class="c-pattern-lab__font-secondary"><em>Secondary Font: Example of a Font Name</em></p>
		<p class="c-pattern-lab__font-secondary"><strong>Secondary Font: Example of a Font Name</strong></p>


		<p class="c-pattern-lab__font-tertiary">Tertiary Font: Example of a Font Name</p>
		<p class="c-pattern-lab__font-tertiary"><em>Tertiary Font: Example of a Font Name</em></p>
		<p class="c-pattern-lab__font-tertiary"><strong>Tertiary Font: Example of a Font Name</strong></p>

	</div>

	<div class="c-pattern-lab__animation">

		<h2 class="c-pattern-lab__section-title">
			Animation
		</h2>

		<div class="c-animation is-first">

			<p class="c-animation__p">Title of Animation</p>
		
		</div>

		<div class="c-animation is-second">

			<p class="c-animation__p">Title of Animation</p>
		
		</div>
		
		<div class="c-animation is-third">

			<p class="c-animation__p">Title of Animation</p>
		
		</div>

	</div>

	<div class="c-pattern-lab__button">
		
		<h2 class="c-pattern-lab__section-title">
			Buttons
		</h2>

		<button class="c-button-primary">Button Primary</button>

		<button class="c-button-secondary">Button Secondary</button>

		<button class="c-button-tertiary">Button Tertiary</button>

	</div>

	<div class="c-pattern-lab__feedback">
		
		<h2 class="c-pattern-lab__section-title">
			Progress
		</h2>

		<progress class="u-progress" max="100" value="75">
			
			<strong></strong>

		</progress>

	</div>

	<div class="c-pattern-lab__form">
		
		<h2 class="c-pattern-lab__section-title">
			Forms
		</h2>

		<h4 class="c-pattern-lab__section-subtitle">Text Inputs</h4>

		<label for="name" class="c-form__label">Name:</label>
		<input id="name" type="text" name="textfield" class="c-form__text">

		<h4 class="c-pattern-lab__section-subtitle">Textareas</h4>

		<label for="address" class="c-form__label">Enter your address:</label>
		<textarea id="address" name="addresstext" class="c-form__textarea"></textarea>

		<h4 class="c-pattern-lab__section-subtitle">Checkbox</h4>

		<fieldset class="c-form__fieldset">

			<legend class="c-form__legend">Select your pizza toppings:</legend>

				<input id="ham" type="checkbox" name="toppings" value="ham" class="c-form__checkbox-input">
				<label for="ham" class="c-form__checkbox-label">Ham</label>
				
				<input id="pepperoni" type="checkbox" name="toppings" value="pepperoni" class="c-form__checkbox-input">
				<label for="pepperoni" class="c-form__checkbox-label">Pepperoni</label>
				
				<input id="mushrooms" type="checkbox" name="toppings" value="mushrooms" class="c-form__checkbox-input">
				<label for="mushrooms" class="c-form__checkbox-label">Mushrooms</label>
				
				<input id="olives" type="checkbox" name="toppings" value="olives" class="c-form__checkbox-input">
				<label for="olives" class="c-form__checkbox-label">Olives</label>
				
		</fieldset>

		<h4 class="c-pattern-lab__section-subtitle">Radio</h4>

		<fieldset class="c-form__fieldset">
			
			<legend class="c-form__legend">Choose a shipping method:</legend>
			
			<input id="overnight" type="radio" name="shipping" value="overnight" class="c-form__radio-input">
			<label for="overnight" class="c-form__radio-label">Overnight</label><br>
			
			<input id="twoday" type="radio" name="shipping" value="twoday" class="c-form__radio-input">
			<label for="twoday" class="c-form__radio-label">Two day</label><br>
			
			<input id="ground" type="radio" name="shipping" value="ground" class="c-form__radio-input">
			<label for="ground" class="c-form__radio-label">Ground</label>
		
		</fieldset>

		<h4 class="c-pattern-lab__section-subtitle">Select Menu</h4>

		<label for="favcity" class="c-form__select-label">Choose your favorite city?</label>

		<select id="favcity" name="select" class="c-form__select">

			<option value="1">Amsterdam</option>
			<option value="2">Buenos Aires</option>
			<option value="3">Delhi</option>
			<option value="4">Hong Kong</option>
			<option value="5">London</option>
			<option value="6">Los Angeles</option>
			<option value="7">Moscow</option>
			<option value="8">Mumbai</option>
			<option value="9">New York</option>
			<option value="10">Sao Paulo</option>
			<option value="11">Tokyo</option>

		</select>
		
	</div>

	<div class="c-pattern-lab__image">
		
		<h2 class="c-pattern-lab__section-title">
			Images
		</h2>

		<h4 class="c-pattern-lab__section-subtitle">Hero Image</h4>

		<img class="c-image c-image--large" src="http://placehold.it/1000x400" alt="Large Image example" />

		<h4 class="c-pattern-lab__section-subtitle">Avatar</h4>

		<img class="c-image c-image--avatar" src="http://placehold.it/200x200" alt="Avatar Image example" />

		<h4 class="c-pattern-lab__section-subtitle">Landscape</h4>

		<img class="c-image c-image--landscape" src="http://placehold.it/650x366" alt="Landscape Image example" />

		<h4 class="c-pattern-lab__section-subtitle">Portrait</h4>

		<img class="c-image c-image--portrait" src="http://placehold.it/400x600" alt="Portrait Image example" />

		<h4 class="c-pattern-lab__section-subtitle">Logo</h4>

		<div class="c-pattern-lab__logo">

			<div class="c-logo__outer">

				<svg version="1.1" id="Layer_1" class="c-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 360 46.4" style="enable-background:new 0 0 360 46.4;" xml:space="preserve">
				
					<style type="text/css">
						.st0{fill:#302D33;}
					</style>

					<g>
						<path class="st0" d="M5.3,7.9h10.7v23.6h8.8v8.4H5.3V7.9z"/>
						<path class="st0" d="M28.8,24c0-2.3,0.4-4.5,1.3-6.5c0.9-2,2.1-3.8,3.6-5.4c1.5-1.5,3.3-2.7,5.4-3.6c2-0.9,4.2-1.3,6.5-1.3
							c2.3,0,4.5,0.4,6.5,1.3c2,0.9,3.8,2.1,5.4,3.6c1.5,1.5,2.7,3.3,3.6,5.4c0.9,2,1.3,4.2,1.3,6.5c0,2.3-0.4,4.5-1.3,6.5
							c-0.9,2-2.1,3.8-3.6,5.4c-1.5,1.5-3.3,2.7-5.4,3.6c-2,0.9-4.2,1.3-6.5,1.3c-2.3,0-4.5-0.4-6.5-1.3c-2-0.9-3.8-2.1-5.4-3.6
							c-1.5-1.5-2.7-3.3-3.6-5.4C29.3,28.4,28.8,26.3,28.8,24z M38.9,24c0,0.9,0.2,1.8,0.5,2.6c0.4,0.8,0.8,1.5,1.4,2.1
							c0.6,0.6,1.3,1.1,2.1,1.4c0.8,0.4,1.7,0.5,2.6,0.5s1.8-0.2,2.6-0.5c0.8-0.4,1.5-0.8,2.1-1.4c0.6-0.6,1.1-1.3,1.4-2.1
							c0.4-0.8,0.5-1.7,0.5-2.6c0-0.9-0.2-1.8-0.5-2.6c-0.4-0.8-0.8-1.5-1.4-2.1c-0.6-0.6-1.3-1.1-2.1-1.4s-1.7-0.5-2.6-0.5
							s-1.8,0.2-2.6,0.5s-1.5,0.8-2.1,1.4c-0.6,0.6-1.1,1.3-1.4,2.1C39.1,22.2,38.9,23,38.9,24z"/>
						<path class="st0" d="M89.1,18.8c-0.6-0.5-1.3-0.9-2.2-1.2c-0.9-0.3-1.7-0.4-2.5-0.4c-0.9,0-1.8,0.2-2.5,0.5c-0.8,0.3-1.4,0.8-2,1.4
							c-0.6,0.6-1,1.3-1.3,2.1C78.2,22.1,78,23,78,24s0.2,1.9,0.5,2.7c0.4,0.8,0.8,1.5,1.4,2.1c0.6,0.6,1.3,1.1,2.1,1.4s1.7,0.5,2.6,0.5
							c1.1,0,2.1-0.2,3-0.7c0.9-0.5,1.7-1.1,2.3-1.9h-2.9v-6.7h12.3V32c-0.7,1.3-1.6,2.5-2.6,3.6c-1,1.1-2.2,2-3.4,2.8s-2.6,1.4-4.1,1.8
							c-1.5,0.4-3,0.6-4.6,0.6c-2.3,0-4.5-0.4-6.5-1.3c-2-0.9-3.8-2-5.4-3.6c-1.5-1.5-2.7-3.3-3.6-5.3c-0.9-2-1.3-4.3-1.3-6.6
							c0-2.3,0.4-4.5,1.2-6.5c0.8-2,2-3.8,3.4-5.4c1.5-1.5,3.2-2.7,5.2-3.6c2-0.9,4.2-1.3,6.5-1.3c1.8,0,3.3,0.2,4.7,0.5
							c1.3,0.4,2.4,0.8,3.3,1.2c1.1,0.5,1.9,1.1,2.6,1.7L89.1,18.8z"/>
						<path class="st0" d="M105,24c0-2.3,0.4-4.5,1.3-6.5c0.9-2,2.1-3.8,3.6-5.4c1.5-1.5,3.3-2.7,5.4-3.6c2-0.9,4.2-1.3,6.5-1.3
							c2.3,0,4.5,0.4,6.5,1.3c2,0.9,3.8,2.1,5.4,3.6c1.5,1.5,2.7,3.3,3.6,5.4c0.9,2,1.3,4.2,1.3,6.5c0,2.3-0.4,4.5-1.3,6.5
							c-0.9,2-2.1,3.8-3.6,5.4c-1.5,1.5-3.3,2.7-5.4,3.6c-2,0.9-4.2,1.3-6.5,1.3c-2.3,0-4.5-0.4-6.5-1.3c-2-0.9-3.8-2.1-5.4-3.6
							c-1.5-1.5-2.7-3.3-3.6-5.4C105.5,28.4,105,26.3,105,24z M115.1,24c0,0.9,0.2,1.8,0.5,2.6c0.4,0.8,0.8,1.5,1.4,2.1
							c0.6,0.6,1.3,1.1,2.1,1.4c0.8,0.4,1.7,0.5,2.6,0.5s1.8-0.2,2.6-0.5c0.8-0.4,1.5-0.8,2.1-1.4c0.6-0.6,1.1-1.3,1.4-2.1
							c0.4-0.8,0.5-1.7,0.5-2.6c0-0.9-0.2-1.8-0.5-2.6c-0.4-0.8-0.8-1.5-1.4-2.1c-0.6-0.6-1.3-1.1-2.1-1.4s-1.7-0.5-2.6-0.5
							s-1.8,0.2-2.6,0.5s-1.5,0.8-2.1,1.4c-0.6,0.6-1.1,1.3-1.4,2.1C115.3,22.2,115.1,23,115.1,24z"/>
						<path class="st0" d="M158.1,39.9v-32h8.9c3,0,5.7,0.3,8,1c2.4,0.7,4.3,1.7,6,3c1.6,1.3,2.8,3,3.7,5c0.8,2,1.3,4.3,1.3,6.9
							c0,2.6-0.4,4.9-1.3,6.9c-0.8,2-2.1,3.7-3.7,5c-1.6,1.3-3.6,2.4-6,3c-2.4,0.7-5,1-8,1H158.1z M168.3,30.8c2.4,0,4.3-0.6,5.6-1.7
							c1.3-1.1,2-2.9,2-5.2c0-2.3-0.7-4.1-2-5.2s-3.2-1.7-5.6-1.7V30.8z"/>
						<path class="st0" d="M192.1,7.9H211v8.4h-8.6v3.6h8.5v8h-8.5v3.7h9v8.4h-19.2V7.9z"/>
						<path class="st0" d="M218.8,7.9h18.9v8.4H229v3.6h8.5v8H229v12.1h-10.2V7.9z"/>
						<path class="st0" d="M252.4,7.9h7.7l12.1,32h-10.1l-1.1-2.9h-9.7l-1.1,2.9h-10.1L252.4,7.9z M258.4,30l-2.2-5.6l-2.2,5.6H258.4z"/>
						<path class="st0" d="M288.7,40.8c-2,0-3.8-0.3-5.5-0.8c-1.6-0.5-3-1.3-4.2-2.3c-1.2-1-2-2.3-2.7-3.9c-0.6-1.6-0.9-3.4-0.9-5.5V7.9
							h10.2v19.9c0,1.1,0.2,2,0.7,2.6c0.5,0.6,1.2,0.9,2.3,0.9c1.1,0,1.9-0.3,2.3-0.9c0.5-0.6,0.7-1.4,0.7-2.6V7.9H302v20.4
							c0,2.1-0.3,4-0.9,5.5c-0.6,1.6-1.5,2.9-2.7,3.9c-1.2,1-2.6,1.8-4.2,2.3C292.6,40.5,290.7,40.8,288.7,40.8z"/>
						<path class="st0" d="M308.8,7.9h10.7v23.6h8.8v8.4h-19.5V7.9z"/>
						<path class="st0" d="M337.8,16.3h-5.9V7.9h22.4v8.4h-5.9v23.6h-10.6V16.3z"/>
					</g>

				</svg>

			</div>

		</div>

	</div>

	<div class="c-pattern-lab__text">
		
		<h2 class="c-pattern-lab__section-title">
			Text
		</h2>

		<div class="c-pattern-lab__headings">

			<h4 class="c-pattern-lab__section-subtitle">Headings</h4>

			<h1 class="u-base__h1">Heading 1: Maybe ever’body in the whole damn world is scared of each other.</h1>
			<h2 class="u-base__h2">Heading 2: Life is to be lived, not controlled; and humanity is won by continuing to play in face of certain defeat.</h2>
			<h3 class="u-base__h3">Heading 3: It was a bright cold day in April, and the clocks were striking thirteen.</h3>
			<h4 class="u-base__h4">Heading 4: We were the people who were not in the papers. We lived in the blank white spaces at the edges of print.</h4>
			<h5 class="u-base__h5">Heading 5: It sounds plausible enough tonight, but wait until tomorrow. Wait for the common sense of the morning.</h5>
			<h6 class="u-base__h6">Heading 6: It's much better to do good in a way that no one knows anything about it.</h6>

		</div>

		<div class="c-pattern-lab__hr">

			<hr />
		
		</div>

		<div class="c-pattern-lab__inline">

			<p><a href="#">This is a text link</a></p>

			<p><strong>Strong is used to indicate strong importance</strong></p>

			<p><em>This text has added emphasis</em></p>

			<p>The <b>b element</b> is stylistically different text from normal text, without any special importance</p>

			<p>The <i>i element</i> is text that is set off from the normal text</p>

			<p>The <u>u element</u> is text with an unarticulated, though explicitly rendered, non-textual annotation</p>

			<p><del>This text is deleted</del> and <ins>This text is inserted</ins></p>

			<p><s>This text has a strikethrough</s></p>

			<p>Superscript<sup>®</sup></p>

			<p>Subscript for things like H<sub>2</sub>O</p>

			<p><small>This small text is small for for fine print, etc.</small></p>

			<p>Abbreviation: <abbr title="HyperText Markup Language">HTML</abbr></p>

			<p>Keybord input: <kbd>Cmd</kbd></p>

			<p><q cite="https://developer.mozilla.org/en-US/docs/HTML/Element/q">This text is a short inline quotation</q></p>

			<p><cite>This is a citation</cite>/p>

			<p>The <dfn>dfn element</dfn> indicates a definition.</p>

			<p>The <mark>mark element</mark> indicates a highlight</p>

			<p><code>This is what inline code looks like.</code></p>

			<p><samp>This is sample output from a computer program</samp></p>

			<p>The <var>variarble element</var>, such as <var>x</var> = <var>y</var></p>

		</div>

		<div class="c-pattern-lab__paragraph">
			
			<p>Last night I dreamt I went to Manderley again. It seemed to me I stood by the iron gate leading to the drive, and for a while I could not enter, for the way was barred to me. Then, like all dreamers, I was possessed of a sudden with supernatural powers and passed like a spirit through the barrier before me. The drive wound away in front of me, twisting and turning as it had always done. But as I advanced, I was aware that a change had come upon it. Nature had come into her own again and little by little had encroached upon the drive with long tenacious fingers, on and on the poor thread that had once been our drive. And finally, there was Manderley, Manderley, secretive and silent. Time could not mar the perfect symmetry of those walls. Moonlight can play odd tricks upon the fancy, and suddenly it seemed to me that light came from the windows. And then a cloud came upon the moon and hovered an instant like a dark hand before a face. The illusion went with it. I looked upon a desolate shell, with no whisper of a past about its staring walls. We can never go back to Manderley again.</p>

		</div>

		<div class="c-pattern-lab__preformatted">
			
			<pre>  	
				P R E F O R M A T T E D T E X T
				! " # $ % &amp; ' ( ) * + , - . /
				0 1 2 3 4 5 6 7 8 9 : ; &lt; = &gt; ?
				@ A B C D E F G H I J K L M N O
				P Q R S T U V W X Y Z [ \ ] ^ _
				` a b c d e f g h i j k l m n o
				p q r s t u v w x y z { | } ~
			</pre>

		</div>	

		<div class="c-pattern-lab__blockquote">
			
			<blockquote>We mortals, men and women, devour many a disappointment between breakfast and dinner-time; keep back the tears and look a little pale about the lips, and in answer to inquiries say, "Oh, nothing!" Pride helps; and pride is not a bad thing when it only urges us to hide our hurts— not to hurt others.</blockquote>

		</div>

	</div>

	<div class="c-pattern-lab__block">
		
		<h2 class="c-pattern-lab__section-title">Blocks</h2>

		<h4 class="c-pattern-lab__section-subtitle">Hero</h4>

		<div class="c-block__hero-outer">
			
			<a href="#" class="c-block__hero">

				<img src="http://placehold.it/650x366" alt="Hero Image" class="c-block__hero-image">

				<h2 class="c-block__hero-h2">You forget what you want to remember, and you remember what you want to forget.</h2>

			</a>

		</div>	

		<h4 class="c-pattern-lab__section-subtitle">Media Blocks</h4>

		<div class="c-block__media-outer">

			<a href="#" class="c-block__media">

				<div class="c-block__media-image-outer">
					<img src="http://placehold.it/250x250" alt="Square Image" class="c-block__media-image">
				</div>

				<div class="c-block__media-body">
					<h2 class="c-block__media-h2">We cast a shadow on something wherever we stand, and it is no good moving from place to place to save things; because the shadow always follows. </h2>
					<p class="c-block__media-excerpt">Choose a place where you won't do harm - yes, choose a place where you won't do very much harm, and stand in it for all you are worth, facing the sunshine.</p>
				</div>

			</a>

		</div>

		<h4 class="c-pattern-lab__section-subtitle">Tout Blocks</h4>

		<div class="c-block__tout-outer">
			
			<a href="#" class="c-block__tout">

				<img src="http://placehold.it/650x366" alt="Landscape Image" class="c-block__tout-image">

				<h2 class="c-block__tout-h2">Nothing is so painful to the human mind as a great and sudden change</h2>

			</a>

		</div>

		<h4 class="c-pattern-lab__section-subtitle">Figure with Caption</h4>

		<div class="c-block__figure-outer">
			
			<figure class="c-block__figure">

				<div class="c-block__figure-media">
					<img src="http://placehold.it/650x366" alt="Landscape Image" class="c-block__figure-image">
				</div>

				<figcaption class="c-block__figure-caption">This is an example of an image with a caption. Photo captions, also known as cutlines, are a few lines of text used to explain or elaborate on published photographs.</figcaption>

			</figure>

		</div>

	</div>

	<div class="c-pattern-lab__messaging">

		<h2 class="c-pattern-lab__section-title">Messaging</h2>

		<div class="u-alert">
			
			<p class="u-alert__success">Wonderful! Thank you for your input!</p>

		</div>

		<div class="u-alert">
			
			<p class="u-alert__warning">Oops - something is not quite right. Can you take a look and update the needed fields?</p>

		</div>

		<div class="u-alert">
			
			<p class="u-alert__error">Something has gone quite wrong. Apologies for the inconvenience.</p>

		</div>

		<div class="u-alert">
			
			<p class="u-alert__information">Fill out the form below and I will get back to you with information as soon as possible.</p>

		</div>

	</div>

	<div class="c-pattern-lab__navigation">
		
		<h2 class="c-pattern-lab__section-title">Navigation</h2>

		<h4 class="c-pattern-lab__section-subtitle">Main Navigation</h4>

		<nav class="c-navigation-main">

			<ul class="c-navigation-main__list">

				<li class="c-navigation-main__item">
					<a href="#" class="c-navigation-main__link">About</a>
				</li>

				<li class="c-navigation-main__item">
					<a href="#" class="c-navigation-main__link">Blog</a>
				</li>

				<li class="c-navigation-main__item">
					<a href="#" class="c-navigation-main__link">Contact</a>
				</li>

				<li class="c-navigation-main__item">
					<a href="#" class="c-navigation-main__link">Login</a>
				</li>

			</ul>

		</nav>

		<h4 class="c-pattern-lab__section-subtitle">Footer Navigation</h4>

		<nav class="c-navigation-footer">

			<ul class="c-navigation-footer__list">

				<li class="c-navigation-footer__item">
					<a href="#" class="c-navigation-footer__link">About</a>
				</li>

				<li class="c-navigation-footer__item">
					<a href="#" class="c-navigation-footer__link">Blog</a>
				</li>

				<li class="c-navigation-footer__item">
					<a href="#" class="c-navigation-footer__link">Contact</a>
				</li>

				<li class="c-navigation-footer__item">
					<a href="#" class="c-navigation-footer__link">Login</a>
				</li>

			</ul>

		</nav>
	
	</div>

	<div class="c-pattern-lab__pagination">
		
		<h2 class="c-pattern-lab__section-title">Pagination</h2>

		<ol class="o-pagination">

			<li class="o-pagination__li">
				<a class="o-pagination__a" href="#">1</a>
			</li>
			
			<li class="o-pagination__li">
				<a class="o-pagination__a" href="#">2</a>
			</li>
			
			<li class="o-pagination__li">
				<a class="o-pagination__a" href="#">3</a>
			</li>
			
			<li class="o-pagination__li">
				<a class="o-pagination__a" href="#">4</a>
			</li>
			
			<li class="o-pagination__li">
				<a class="o-pagination__a" href="#">5</a>
			</li>
			
			<li class="o-pagination__li">
				<a class="o-pagination__a" href="#">6</a>
			</li>
			
			<li class="o-pagination__li">
				<a class="o-pagination__a" href="#">7</a>
			</li>

		</ol>

	</div>

</div>
