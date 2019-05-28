<?php /* Template name: contato */ ?>
<?php get_header(); ?>

    <div id="banner-contato">
    <section id="branco-contato">
        <div class="texto-form-contato">
            <?php echo do_shortcode('[contact-form-7 id="30" title="contato"]'); ?>
                <!--div class="form-group selector">
                    <label>Nome</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group selector direita">
                    <label>Sobrenome</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Observação / Comentário </label>
                    <textarea class="form-control" rows="7" id=""></textarea>
                </div>
                <button type="submit" class="btn">Enviar</button-->
        </div>
        <div class="texto-contato">
           
            <p>
                Horário:<br>
                Seg - Sex <b>08:00h - 18:00h</b><br>
                Sáb . Dom e Feriado <b>Fechado</b><br>
                
                Telefone: (11) <b>2476.7858</b> ou <b>99420.6707</b><br/>
                
                E-mail: <b>contato@babyology.com.br</b><br>
                
                Rua Alvorada, 1289 - Vila Olímpia.<br>
                Conjunto 1009 <br>
                
                ou digite no waze: <b>BabyOlogy ;)</b>                         
            </p>
        </div>
    </section>
    </div>



    <footer>
        <div class="row col-md-12">
            <div class="row col-md-6 menu">
                <table>
                    <tr>
                        <td>
                            baby
                        </td>
                        <td>
                            ology
                        </td>
                        <td>
                            <img src="<?php bloginfo('template_url'); ?>/src/assets/images/home/icon-footer.png" alt="">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="row col-md-6 icons">
                <a href="https://www.instagram.com/babyologybr" target="_blank"><img
                        src="<?php bloginfo('template_url'); ?>/src/assets/images/home/insta-footer.png" alt=""></a>
                <a href="https://api.whatsapp.com/send?phone=5511994206707" target="_blank"><img
                        src="<?php bloginfo('template_url'); ?>/src/assets/images/home/whats-footer.png" alt=""></a>
            </div>
        </div>
    </footer>
<?php get_footer(); ?>