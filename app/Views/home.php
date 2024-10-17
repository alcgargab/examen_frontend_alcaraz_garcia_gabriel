        <div class="container-fluid p-5">
            <div class="row">
                <div class="col">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#createUser" class="btn btn-outline-success"><i class="fa-solid fa-plus"></i> Agregar</a>
                    <div class="modal" id="createUser">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Agregar usuario</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?=base_url()?>create" method="post">
                                        <div class="mb-3 mt-3">
                                            <label for="name" class="form-label">Nombre:</label>
                                            <input type="text" class="form-control" id="name" placeholder="Nombre completo" name="name" required>
                                        </div>
                                        <div class="mb-3 mt-3">
                                            <label for="email" class="form-label">Email:</label>
                                            <input type="email" class="form-control" id="email" placeholder="Correo electrónico" name="email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="pass" class="form-label">Contraseña:</label>
                                            <input type="password" class="form-control" id="pass" placeholder="Contraseña" name="pass" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="location" class="form-label">Dirección:</label>
                                            <input type="text" class="form-control" id="location" placeholder="Dirección" name="location" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="phone" class="form-label">Teléfono:</label>
                                            <input type="tel" class="form-control" id="phone" placeholder="Número de teléfono" name="phone" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="birthday" class="form-label">Fecha de nacimiento:</label>
                                            <input type="date" class="form-control" id="birthday" name="birthday" required>
                                        </div>
                                        <button type="submit" class="btn btn-outline-primary apiR">Agregar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <table class="table textMain">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Fecha de nacimiento</th>
                                <th>Edad</th>
                                <th>Operación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $usuario): ?>
                                <tr>
                                    <td><?=$usuario['Name']?></td>
                                    <td><?=$usuario['Email']?></td>
                                    <td><?=$usuario['direccion']?></td>
                                    <td><?=$usuario['telefono']?></td>
                                    <td><?=__convertDateToLetter($usuario['fNacimiento'])?></td>
                                    <td><?=__getAge($usuario['fNacimiento'])?> Años</td>
                                    <td>
                                        <a href="<?=base_url()?>read/<?=$usuario['ID']?>" class="btn btn-outline-secondary apiR"><i class="fa-regular fa-eye"></i> Ver</a>
                                        <a href="<?=base_url()?>update/<?=$usuario['ID']?>" class="btn btn-outline-primary apiR"><i class="fa-regular fa-pen-to-square"></i> Actualizar</a>
                                        <a href="<?=base_url()?>delete/<?=$usuario['ID']?>" class="btn btn-outline-danger apiR"><i class="fa-regular fa-trash-can"></i> Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>