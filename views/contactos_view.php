
    <!-- MAIN -->


    <main class="container pt-3">

        <div class="row mt-5">

            <div class="col-12">
                <hr class="hr_main">
            </div>

        </div>




        <!-- CONTACTOS -->

    

        <div class="row mt-5">

            <div class="col-12 text-center poppins font-weight-bold fs-3 mb-4">
                Contactos
            </div>

        </div>

        <div class="row">

            <div class="col-12 col-md-5 d-flex flex-column poppins fw-semibold fs-5 gap-4 p-2">

                <div class="mt-3">

                    <span class="upper">morada</span> 
                    <br>
                    Rua Passos Manuel, 59-1.º 4000-384 Porto

                </div>

                <div>

                    <span class="upper">telefone</span>
                    <br>
                    <span class="fw-normal">(+351) 222 088 76</span>

                </div>

                <div>

                    <span class="upper">fax</span>
                    <br>
                    <span class="fw-normal">(+351) 222 088 761</span>

                </div>


                <div>

                    <span class="upper">e-mail</span>
                    <br>
                    <span class="fw-normal">cooptripeira@mail.telepac.pt</span>

                </div>

            </div>



            <div class="col-12 col-md-7 poppins">
                <form method="post" class="fw-semibold input_contactos">

                    <?php if($form): ?>

                        <h3 class="text-danger">Preencha o RECAPTCHA!</h3>

                    <?php endif; ?>

                    <label for="nome" class="fs-5">*NOME</label>
                    <br>
                    <input type="text" name="nome" placeholder="Insira aqui o seu nome" required>

                    <br><br>

                    <label for="e-mail" class="fs-5">*E-MAIL</label>
                    <br>
                    <input type="email" name="email" placeholder="Insira aqui o seu e-mail" required>

                    <br><br>

                    <label for="telefone" class="fs-5">*TELEFONE</label>
                    <br>
                    <input type="text" name="telefone" placeholder="Insira aqui o seu telefone" required>
                    
                    <br><br>

                    <label for="assunto" class="fs-5">*ASSUNTO</label>
                    <br>
                    <input type="text" name="assunto" placeholder="Insira aqui o seu assunto" required>

                    <br><br>

                    <label for="mensagem" class="fs-5">*Mensagem</label>
                    <br>
                    <textarea name="mensagem" placeholder="Insira aqui a sua mensagem" rows="5" required></textarea>


                    <div class="row">

                        <div class="col-7 fw-light unico">

                            <p class="poppins">*Campos de preenchimento obrigatório</p>


                            <label for="copia" class="poppins">
                                <input type="checkbox" name="copia" value="sim">
                                Quero receber uma copia desta mensagem no meu e-mail: 
                            </label>
                            

                        </div>

                        <div class="col-12 col-lg-5">

                            <div class="d-flex justify-content-center">
                                <div class="g-recaptcha" data-sitekey="meta sua chave do site aqui"><div><div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-h7jgx4ukr3x8" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=meta%20sua%20chave%20do%20site%20aqui&amp;co=aHR0cDovL2xvY2FsaG9zdDo4MA..&amp;hl=pt-PT&amp;v=Xv-KF0LlBu_a0FJ9I5YSlX5m&amp;size=normal&amp;cb=m3prtrvo9f9m"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                            </div>

                        </div>

                    </div>

                    <br><br>
                    
                    <div class="text-end"><input type="submit" value="Enviar" class="w-25 rounded-5 enviar"></div>

                    
                </form>
            </div>
        </div>

        

            
        
    </main>
