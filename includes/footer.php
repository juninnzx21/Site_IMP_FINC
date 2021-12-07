<footer class="text-light p-3 bg-dark animate__animated animate__fadeInBottomLeft">
    <div class="row mt-5 m-auto">
        <div class="row">
            <div class="col-xl-3 col-sm-12 box-footer ">
                <h5 class="text-center">Endereço</h5>
                <p class="text-center">Rua Conceição Macedo de Novais, 140 - Cidade Nova, Belo Horizonte-MG, 31170160,
                    Brasil</p>
                <p class="text-center">Av. Amador Bueno da Veiga, 2032 - Penha de FrançaSão Paulo - SP, 03636-100,
                    Brasil</p>
            </div>
            <div class="col-xl-3 col-sm-12 box-footer">
                <h5 class="text-center">Telefone</h5>
                <p class="text-center">(31)2333-0152</p>
            </div>
            <div class="col-xl-3 col-sm-12 box-footer">
                <h5 class="text-center">Whatsapp</h5>
                <p class="text-center">(31) 9 91739320</p>
                <p class="text-center">(31) 9 93724978</p>
                <!--<p class="text-center">(31) 9 99999999</p>-->
            </div>
            <div class="col-xl-3 col-sm-12 box-footer">

                <a class="nav-link text-center text-white" href="<?=$url?>pages/atendimento-ao-cliente.php">Atendimento
                    ao
                    Cliente</a>
                <h5 class="text-center text-">Receba nossas novidades</h5>
                <form method="post" action="<?=$url?>includes/process2.php">
                    <div class="input-group mb-3">
                        <input name='email' class="form-control" placeholder="E-mail..." type="email">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o"></i></button>
                    </div>


                </form>
            </div>
        </div>
    </div>
    <hr>
    <p class="p-2 text-center">© <?= date('Y')?>. Todos os direitos reservados. Multicredbh Crédito Financiamento e
        Investimento.</p>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<!----------------------------------------->
<!--TODO: CRIAR SCROLL PARA FORM DE CONTATO!-->
<script src="assets/js/jquery.js"></script>
<script>
$('nav.mobile h3').click(function() {
    $('nav.mobile').find('ul').slideToggle();
})
</script>
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
<div class="snackbars" id="form-output-global"></div>


</body>

</html>