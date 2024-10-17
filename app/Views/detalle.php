        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title text-success"><?=($data['Name'])?$data['Name']:""?></h5>
                            <p><strong>Correo electrónico:</strong> <?=($data['Email'])?$data['Email']:""?></p>
                            <p><strong>Dirección:</strong> <?=($data['direccion'])?$data['direccion']:""?></p>
                            <p><strong>Teléfono:</strong> <?=($data['telefono'])?$data['telefono']:""?></p>
                            <p><strong>Fecha de Nacimiento:</strong> <?=($data['fNacimiento'])?__convertDateToLetter($data['fNacimiento']):""?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>