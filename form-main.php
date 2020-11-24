<?php
/*
Plugin Name: Form Calculator
Plugin URI: http://wpadvisor.net/form-calculator
Description: For custom form.
Version: 1.0
Author: ranakpik
Author URI: http://wpadvisor.net
License: GPLv2 or later
Text Domain: wpadvisor
*/

function form_script_file() {
    wp_register_style('main-style', plugins_url('css/form-main.css',__FILE__ ));
    wp_enqueue_style('main-style');
	wp_enqueue_script( 'main-js', plugins_url('js/form-main.js',__FILE__ ), array( 'jquery' ) );
}

add_action( 'wp_enqueue_scripts','form_script_file');

require_once("form_functions.php");

//Register single Shostcode
function max_form_shortcode( $atts ){
	return '
	<div class="form_area">
		<form id="cal_form" method="post" action="">
			<div class="form_row radio_row">
				<div class="f_col_12">
					<label>Lytis :</label>
					<div class="form_group">
						<span class="radio-group">
							<input name="gender" type="radio" value="VYRAS" id="VYRAS" checked>
							<label for="VYRAS">VYRAS</label>
						</span>
						<span class="radio-group">
							<input name="gender" type="radio" value="MOTERIS" id="MOTERIS">
							<label for="MOTERIS">MOTERIS</label>
						</span>
					</div>
				</div>
			</div>
			<div class="form_row">
				<div class="f_col_4">
					<div class="form_group">
						<label>Amžius (m)</label>
						<input name="age" onwheel="this.blur()" type="number" placeholder="pvz.: 25" min="12" max="80"/>
					</div>
				</div>
				<div class="f_col_4">
					<div class="form_group">
						<label>Ūgis (cm): </label>
						<input name="height" onwheel="this.blur()" type="number" placeholder="pvz.: 172" min="120" max="220"/>
					</div>
				</div>
				<div class="f_col_4">
					<div class="form_group">
						<label>Svoris (kg): </label>
						<input name="weight" onwheel="this.blur()" type="number" placeholder="pvz.: 70" min="40" max="150"/>
					</div>
				</div>
			</div>
			<div class="form_row radio_row">
				<div class="f_col_12">
					<label>Tikslas :</label>
					<div class="form_group">
						<span class="radio-group">
							<input name="goal" type="radio" value="MASĖ" id="MASĖ">
							<label for="MASĖ">MASĖ</label>
						</span>
						<span class="radio-group">
							<input name="goal" type="radio" value="LIESA MASĖ" id="LIESA">
							<label for="LIESA">LIESA MASĖ</label>
						</span>
						<span class="radio-group">
							<input name="goal" type="radio" value="JĖGA" id="JĖGA">
							<label for="JĖGA">JĖGA</label>
						</span>
						<span class="radio-group">
							<input name="goal" type="radio" value="IŠTVERMĖ" id="IŠTVERMĖ">
							<label for="IŠTVERMĖ">IŠTVERMĖ</label>
						</span>
						<span class="radio-group">
							<input name="goal" type="radio" value="RIEBALŲ DEGINIMAS" id="RIEBALŲ">
							<label for="RIEBALŲ">RIEBALŲ DEGINIMAS</label>
						</span>
						<span class="radio-group">
							<input name="goal" type="radio" value="SVEIKI SKANĖSTAI" id="SVEIKI">
							<label for="SVEIKI">SVEIKI SKANĖSTAI</label>
						</span>
						<span class="radio-group">
							<input name="goal" type="radio" value="ENERGIJA" id="ENERGIJA">
							<label for="ENERGIJA">ENERGIJA</label>
						</span>
						<span class="radio-group">
							<input name="goal" type="radio" value="SVEIKATA" id="SVEIKATA">
							<label for="SVEIKATA">SVEIKATA</label>
						</span>
					</div>
				</div>
			</div>
			<div class="form_row">
				<div class="f_col_6">
					<div class="form_group">
						<label>Fizinio aktyvumo lygis</label>
						<select name="phy_ac_label">
							<option value="">Please Select</option>
							<option value="MINIMALUS (nesportuoju/sėdimas darbas)">MINIMALUS (nesportuoju/sėdimas darbas)</option>
							<option value="MAŽAS (vaikščioju/sportuoju 1-2 k./sav.)">MAŽAS (vaikščioju/sportuoju 1-2 k./sav.)</option>
							<option value="VIDUTINIS (vaikščioju/sportuoju 3 k./sav.)">VIDUTINIS (vaikščioju/sportuoju 3 k./sav.)</option>
							<option value="DIDELIS (intensyviai sportuoju 4-5 k./sav.)">DIDELIS (intensyviai sportuoju 4-5 k./sav.)</option>
							<option value="MAKSIMALUS (intensyviai sportuoju 6-7 k./sav.)">MAKSIMALUS (intensyviai sportuoju 6-7 k./sav.)</option>
						</select>
					</div>
				</div>
				<div class="f_col_6">
					<div class="form_group">
						<label>Blogiausias mitybos įprotis</label>
						<select name="bad_habbit">
							<option value="">Please Select</option>
							<option value="Pusryčių atsisakymas">Pusryčių atsisakymas</option>
							<option value="Daržovių nevalgymas">Daržovių nevalgymas</option>
							<option value="Dažnas persivalgymas">Dažnas persivalgymas</option>
							<option value="Dažnas užkandžiavimas">Dažnas užkandžiavimas</option>
							<option value="Piktnaudžiavimas saldumynais">Piktnaudžiavimas saldumynais</option>
							<option value="Piktnaudžiavimas greitu maistu">Piktnaudžiavimas greitu maistu</option>
						</select>
					</div>
				</div>
			</div>
			<div class="form_row">
				<div class="f_col_6">
					<div class="form_group">
						<label>Blogiausias mitybos įprotis</label>
						<select name="bad_habbit">
							<option value="">Please Select</option>
							<option value="Pusryčių atsisakymas">Pusryčių atsisakymas</option>
							<option value="Daržovių nevalgymas">Daržovių nevalgymas</option>
							<option value="Dažnas persivalgymas">Dažnas persivalgymas</option>
							<option value="Dažnas užkandžiavimas">Dažnas užkandžiavimas</option>
							<option value="Piktnaudžiavimas saldumynais">Piktnaudžiavimas saldumynais</option>
							<option value="Piktnaudžiavimas greitu maistu">Piktnaudžiavimas greitu maistu</option>
						</select>
					</div>
				</div>
				<div class="f_col_6">
					<div class="form_group">
						<label>El. paštas</label>
						<input type="email" name="e-mail" placeholder="Ex labas@sportuojantys.lt"/>
					</div>
				</div>
			</div>
			<div class="submit_row">	
				<input id="apply_btn" type="submit" value="GAUTI ŽAIBIŠKĄ KONSULTACIJĄ! " />
			</div>
		</form>
	</div>
	';
}
add_shortcode( 'form-calculator', 'max_form_shortcode' );

/* I'm from branch Rana */