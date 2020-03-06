<!-- ModalSearch Box -->
<div class="modal fade" id="ModalSearch" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="wm-modallogin-form">
                    <span class="wm-color">Search Your KeyWord</span>
                    <form>
                        <ul>
                            <li>
                                <input
                                    type="text"
                                    value="Keywords..."
                                    onblur="if(this.value == '') { this.value ='Keywords...'; }"
                                    onfocus="if(this.value =='Keywords...') { this.value = ''; }"
                                />
                            </li>
                            <li><input type="submit" value="Search" /></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- ModalSearch Box -->