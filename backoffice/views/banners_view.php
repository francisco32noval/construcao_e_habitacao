<?php

$banners = getBanners();

?>


    <main class="container quem_somos">

        <div class="row my-4">
            <div class="col-12 text-center">
                <h3>Banners</h3>
            </div>
        </div>

        <div class="row mt-5">

            <div class="col-12 text-center">

                <table>

                    <tr>
                        <th>Quem Somos</th>
                        <th>Ações</th>
                    </tr>


                    

                    <tr>

                        
                        <td>
                            <img class="w-50" src="<?= $banners["quem_somos"]; ?>" alt="<?= $banners["id"]; ?>">
                        </td>


                        <td>
                            <a href="banners_editar.php?id=<?= $banners["id"]; ?>"><button type="button" class="btn editar">Editar</button></a>
                        </td>

                    </tr>
                    
                    


                </table>

            </div>

        </div>

        <div class="row mt-5">

            <div class="col-12 text-center">

                <table>

                    <tr>
                        <th>Sócios</th>
                        <th>Ações</th>
                    </tr>


                    

                    <tr>

                        
                        <td>
                            <img class="w-50" src="<?= $banners["socios"]; ?>" alt="<?= $banners["id"]; ?>">
                        </td>


                        <td>
                            <a href="banners_editar.php?id=<?= $banners["id"]; ?>"><button type="button" class="btn editar">Editar</button></a>
                        </td>

                    </tr>
                    
                    


                </table>

            </div>

        </div>

        <div class="row mt-5">

            <div class="col-12 text-center">

                <table>

                    <tr>
                        <th>Notícias</th>
                        <th>Ações</th>
                    </tr>


                    

                    <tr>

                        
                        <td>
                            <img class="w-50" src="<?= $banners["noticias"]; ?>" alt="<?= $banners["id"]; ?>">
                        </td>


                        <td>
                            <a href="banners_editar.php?id=<?= $banners["id"]; ?>"><button type="button" class="btn editar">Editar</button></a>
                        </td>

                    </tr>
                    
                    


                </table>

            </div>

        </div>

        <div class="row mt-5">

            <div class="col-12 text-center">

                <table>

                    <tr>
                        <th>Destaques</th>
                        <th>Ações</th>
                    </tr>


                    

                    <tr>

                        
                        <td>
                            <img class="w-50" src="<?= $banners["destaques"]; ?>" alt="<?= $banners["id"]; ?>">
                        </td>


                        <td>
                            <a href="banners_editar.php?id=<?= $banners["id"]; ?>"><button type="button" class="btn editar">Editar</button></a>
                        </td>

                    </tr>
                    
                    


                </table>

            </div>

        </div>

        <div class="row mt-5">

            <div class="col-12 text-center">

                <table>

                    <tr>
                        <th>Empreendimentos</th>
                        <th>Ações</th>
                    </tr>


                    

                    <tr>

                        
                        <td>
                            <img class="w-50" src="<?= $banners["empreendimentos"]; ?>" alt="<?= $banners["id"]; ?>">
                        </td>


                        <td>
                            <a href="banners_editar.php?id=<?= $banners["id"]; ?>"><button type="button" class="btn editar">Editar</button></a>
                        </td>

                    </tr>
                    
                    


                </table>

            </div>

        </div>

        <div class="row mt-5">

            <div class="col-12 text-center">

                <table>

                    <tr>
                        <th>Centro de Férias</th>
                        <th>Ações</th>
                    </tr>


                    

                    <tr>

                        
                        <td>
                            <img class="w-50" src="<?= $banners["centro_de_ferias"]; ?>" alt="<?= $banners["id"]; ?>">
                        </td>


                        <td>
                            <a href="banners_editar.php?id=<?= $banners["id"]; ?>"><button type="button" class="btn editar">Editar</button></a>
                        </td>

                    </tr>
                    
                    


                </table>

            </div>

        </div>

        <div class="row mt-5">

            <div class="col-12 text-center">

                <table>

                    <tr>
                        <th>Contactos</th>
                        <th>Ações</th>
                    </tr>


                    

                    <tr>

                        
                        <td>
                            <img class="w-50" src="<?= $banners["contactos"]; ?>" alt="<?= $banners["id"]; ?>">
                        </td>


                        <td>
                            <a href="banners_editar.php?id=<?= $banners["id"]; ?>"><button type="button" class="btn editar">Editar</button></a>
                        </td>

                    </tr>
                    
                    


                </table>

            </div>

        </div>

    </main>


</body>
</html>