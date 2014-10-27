<?php include('template/head_view.php'); ?>
<div class="row ">  
    <div class="large-12 columns">
        <h1 style="color: #008cba">Grupos > Perfil</h1>
    </div>
</div>
<div class="row">
    <div class="large-12 columns">
        <form name="GroupProfile" class="sweetForm"  >
            <div class="messages"></div>
            <!-- JAVASCRIPT AJAX DA MENSAGEM SE ENCONTRA NO ARQUIVO footer_view -->
            <div class="row">
                <div class="large-6 columns">
                    <label>* Nome</label>
                    <input type="text" name="GroupProfile[name]"  />
                    <label>Grupo Facebook</label>
                    <input type="text" name="GroupProfile[url_group_facebook]"  />
                    <label>Grupo Google+</label>
                    <input type="text" name="GroupProfile[url_group_google]"  />
                    <p:column />
                    <input type="checkbox" name="GroupProfile[active]"> Ativo
                </div>
                <div class="large-6 columns">
                    <p:dataTable value="#{groupProfileMB.listGroupProfiles}" var="groupProfile" emptyMessage="Cadastre seus grupos" styleClass="margin-top-max">
                        <f:facet name="header">
                            Meus grupos
                        </f:facet>
                        <p:column  headerText="Nome">
                            <p:commandLink action="#{groupProfileMB.edit(groupProfile)}" update=":form_group_profiles:" styleClass="font-size-16" global="false">
                                #{groupProfile.name}
                            </p:commandLink>
                        </p:column>
                    </p:dataTable>
                </div>
            </div>
            <div class="row">
                <div class="large-12 columns">
                    <p:commandLink value="Salvar" styleClass="button radius" style="margin-top: 25px" action="#{groupProfileMB.save()}" update=":form_group_profiles:"/>
                </div>
            </div>
        </form>
    </div>
</div> 
<?php
include('template/footer_view.php');
