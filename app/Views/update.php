        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body">
                            <form action="<?=base_url()?>update-action" method="post">
                                <div class="mb-3 mt-3">
                                    <input type="text" class="form-control dNone" id="idUser" name="idUser" value="<?=($data['ID'])?$data['ID']:''?>" required>
                                    <label for="name" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control" id="name" placeholder="Nombre completo" name="name" value="<?=($data['Name'])?$data['Name']:''?>" required>
                                </div>
                                <div class="mb-3 mt-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Correo electrónico" name="email" value="<?=($data['Email'])?$data['Email']:''?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pass" class="form-label">Contraseña:</label>
                                    <input type="password" class="form-control" id="pass" placeholder="Contraseña" name="pass" value="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="location" class="form-label">Dirección:</label>
                                    <input type="text" class="form-control" id="location" placeholder="Dirección" name="location" value="<?=($data['direccion'])?$data['direccion']:''?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Teléfono:</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="Número de teléfono" name="phone" value="<?=($data['telefono'])?$data['telefono']:''?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="birthday" class="form-label">Fecha de nacimiento:</label>
                                    <input type="date" class="form-control" id="birthday" name="birthday" value="<?=($data['fNacimiento'])?$data['fNacimiento']:''?>" required>
                                </div>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>