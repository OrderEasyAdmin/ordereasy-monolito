<div class="signin-wrapper">
      <div class="signin-box">
        <center><<div style="width: 300px; background-color: transparent; display: flex; justify-content: center; align-items: center; color: white; font-size: 42px; font-weight: bold;">
    <span style="color: #67b66f;">OrderEasy</span>
  </div>
        <h3 class="signin-title-secondary">CRIAR UMA NOVA CONTA</h3></center>
		
		
		<p style="font-size:12px; margin-top:-40px;" align="justify">Informe um nome para sua url sem espaços e sem acentos. Não será possível alterar este nome posteriormente.</p>
		<form method="post" action="verificar_url">
		<div class="form-group">
		<label><i class="fa fa-sign-out" aria-hidden="true" style="color:#0099FF"></i> <?php print $urlmaster; ?>/</label>
		 
        <input type="text" name="url" class="form-control" placeholder="informe aqui o nome da empresa"  maxlength="30" required>
		<p style="font-size:12px"><strong>Ex: reidopastel</strong></p>
		
        </div>
		<input type="hidden" name="modelo" value="1" required>
		<br>
		
        <button type="submit" class="btn btn-primary btn-block btn-signin" style="margin-top:-20px;">Verificar Disponibilidade</button>
		</form> 
		<center><?php if(isset($_GET["cod"])) { echo "<strong style=\"color:#FF0000; font-size:14px; margin-top:-30px;\">Este nome não esta disponível.</strong>"; } ?></center>
		</div>
      
    </div>
  </body>
</html>