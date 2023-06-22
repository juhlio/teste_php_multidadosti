<!-- BEGIN FOOTER -->
<div class="footer">
    <div class="footer-inner">
        2022 &copy; Multidados TI.
    </div>
    <div class="footer-tools">
        <span class="go-top">
            <i class="fa fa-angle-up"></i>
        </span>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.cockie.min.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>


<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/app.js" type="text/javascript"></script>
<script src="assets/scripts/index.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        App.init(); // initlayout and core plugins
        Index.init();
    });
</script>

<script>
    document.getElementById("visualizaUsuarios").addEventListener("click", function() {
        var tabela = document.getElementById("tabeladash");
        tabela.classList.add("green");
        tabela.classList.remove("blue");
        tabela.classList.remove("purple");

        $.ajax({
            url: "usuarios.php",
            type: "GET",
            dataType: "json",
            success: function(response) {
                // Os dados da tabela estão na variável response
                var dadosUsuarios = response;

                var thead = tabela.getElementsByTagName('thead')[0];
                thead.innerHTML = ""

                var headHow = "<tr>" +
                    "<th> Nome </th>" +
                    "<th>CPF</th>" +
                    "<th>Endereço</th>" +
                    "<th>Telefone</th>" +
                    "<th>Usuário</th>" +
                    "</tr>"
                thead.innerHTML += headHow



                // Atualizar a tabela com os dados buscados
                var tbody = tabela.getElementsByTagName("tbody")[0];
                tbody.innerHTML = ""; // Limpar a tabela antes de adicionar os dados

                for (var i = 0; i < dadosUsuarios.length; i++) {
                    var usuario = dadosUsuarios[i];
                    var row = "<tr>" +
                        "<td>" + usuario.nome + "</td>" +
                        "<td>" + usuario.cpf + "</td>" +
                        "<td>" + usuario.endereco + "</td>" +
                        "<td>" + usuario.telefone + "</td>" +
                        "<td>" + usuario.usuario + "</td>" +
                        "</tr>";
                    tbody.innerHTML += row;
                }
            },
            error: function() {
                console.log("Erro ao buscar os dados dos usuários.");
            }
        });




    });
</script>


<script>
    document.getElementById("visualizaClientes").addEventListener("click", function() {
        var tabela = document.getElementById("tabeladash");
        tabela.classList.add("blue");
        tabela.classList.remove("green");
        tabela.classList.remove("purple");

        $.ajax({
            url: "clientes.php",
            type: "GET",
            dataType: "json",
            success: function(response) {
                // Os dados da tabela estão na variável response
                var dadosClientes = response;

                var thead = tabela.getElementsByTagName('thead')[0];
                thead.innerHTML = ""

                var headHow = "<tr>" +
                    "<th> Nome </th>" +
                    "<th>CPF</th>" +
                    "<th>Endereço</th>" +
                    "<th>E-mail</th>" +

                    "</tr>"
                thead.innerHTML += headHow



                // Atualizar a tabela com os dados buscados
                var tbody = tabela.getElementsByTagName("tbody")[0];
                tbody.innerHTML = ""; // Limpar a tabela antes de adicionar os dados

                for (var i = 0; i < dadosClientes.length; i++) {
                    var cliente = dadosClientes[i];
                    var row = "<tr>" +
                        "<td>" + cliente.nome + "</td>" +
                        "<td>" + cliente.cpf + "</td>" +
                        "<td>" + cliente.endereco + "</td>" +
                        "<td>" + cliente.email + "</td>" +
                        "</tr>";
                    tbody.innerHTML += row;
                }
            },
            error: function() {
                console.log("Erro ao buscar os dados dos usuários.");
            }
        });
    });
</script>

<script>
    document.getElementById("visualizaFornecedores").addEventListener("click", function() {
        var tabela = document.getElementById("tabeladash");
        tabela.classList.add("purple");
        tabela.classList.remove("green");
        tabela.classList.remove("blue");


        $.ajax({
            url: "fornecedores.php",
            type: "GET",
            dataType: "json",
            success: function(response) {
                // Os dados da tabela estão na variável response
                var dadosFornecedores = response;

                var thead = tabela.getElementsByTagName('thead')[0];
                thead.innerHTML = ""

                var headHow = "<tr>" +
                    "<th> Nome </th>" +
                    "<th>CPF</th>" +
                    "<th>Cidade</th>" +
                    "<th>E-mail</th>" +

                    "</tr>"
                thead.innerHTML += headHow



                // Atualizar a tabela com os dados buscados
                var tbody = tabela.getElementsByTagName("tbody")[0];
                tbody.innerHTML = ""; // Limpar a tabela antes de adicionar os dados

                for (var i = 0; i < dadosFornecedores.length; i++) {
                    var fornecedor = dadosFornecedores[i];
                    var row = "<tr>" +
                        "<td>" + fornecedor.nome + "</td>" +
                        "<td>" + fornecedor.cpf + "</td>" +
                        "<td>" + fornecedor.cidade + "</td>" +
                        "<td>" + fornecedor.email + "</td>" +
                        "</tr>";
                    tbody.innerHTML += row;
                }
            },
            error: function() {
                console.log("Erro ao buscar os dados dos usuários.");
            }
        });
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>
