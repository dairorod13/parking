	<div class="general">
		<div class="big-1">
		<div class="padre-big">
        <?php foreach(parent::all() as $tipo):  ?>
    <button class="big"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
    <button class="big"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
    <button class="big"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
    <button class="big"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
    <button class="big"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
    <button class="big"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
    </div>
    <?php endforeach; ?>
        </div>
		<div class="big-2">
			<div class="small-1">
            <?php foreach(parent::car() as $tipo):  ?>
			   <button class="carro-1"><img src="assets/img/camioneta.png"></button>
               <button class="carro-1"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
               <button class="carro-1"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
               <button class="carro-1"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
               <button class="carro-1"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
               <button class="carro-1"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
               <button class="carro-1"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
			  </div>
               <?php endforeach; ?>
			<div class="small-2">
            <?php foreach(parent::moto() as $tipo):  ?>
			   <button class="moto-1"><img src="assets/img/moto.png"></button>
               <button class="moto-1"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
               <button class="moto-1"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
               <button class="moto-1"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
               <button class="moto-1"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
               <button class="moto-1"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
               <button class="moto-1"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
			</div>
            <?php endforeach; ?>
			<div class="small-3">
            <?php foreach(parent::car() as $tipo):  ?>
			   <button class="carro-2"><img src="assets/img/car.png"></button>
               <button class="carro-2"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
               <button class="carro-2"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
               <button class="carro-2"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
               <button class="carro-2"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
               <button class="carro-2"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
               <button class="carro-2"><?= $tipo->nombre_tipo?> <?= $tipo->nombre_estado?></button>
			</div>
            <?php endforeach; ?>
		</div>
	</div>	


    
