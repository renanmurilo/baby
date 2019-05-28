<?php /* Template name: agendamento */ ?>
<?php get_header(); ?>

    <section id="branco-agendamento">
        <div class="texto-form-agendamento">
            <p>Para agendar, preencha os campos abaixo que responderemos em seguida:( ou entre em contato via <a href="https://api.whatsapp.com/send?phone=5511994206707" target="_blank">whatsapp</a> )</p>
                <?php echo do_shortcode('[contact-form-7 id="29" title="agendamento"]'); ?>
                <!--div class="form-group">
                    <label>Nome completo do Responsável/Cuidador ( Obrigatório )</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nome completo do bebê ( Obrigatório )</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group selector">
                    <label>Idade do bebê ( Obrigatório )</label>
                    <select class="form-control" id="azul">
                        <option></option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="form-group selector direita">
                    <label class="esquerda">Serviço de interesse ( Obrigatório )</label>
                    <select class="form-control" id="azul">
                        <option></option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Celular ( Obrigatório )</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>E-mail ( Obrigatório )</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Observação / Comentário </label>
                    <textarea class="form-control" rows="7" id=""></textarea>
                </div>
                <button type="submit" class="btn">Enviar</button-->
        </div>
        <div class="texto-agendamento">
           
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



    <footer id="branco">
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
                            <img src="<?php bloginfo('template_url'); ?>/src/assets/images/home/icon.png" alt="">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="row col-md-6 icons">
                <a href="https://www.instagram.com/babyologybr" target="_blank"><img
                        src="<?php bloginfo('template_url'); ?>/src/assets/images/home/insta.png" alt=""></a>
                <a href="https://api.whatsapp.com/send?phone=5511994206707" target="_blank"><img
                        src="<?php bloginfo('template_url'); ?>/src/assets/images/home/whats.png" alt=""></a>
            </div>
        </div>
    </footer>
<?php get_footer(); ?>