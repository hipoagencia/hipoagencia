<div>



    <div class="container" x-data="creditCard()" x-init="PagSeguroDirectPayment.setSessionId('{{$sessionId}}')">
        <div class="row">



            <div class="col-lg-6">

                <div class="row">
                    <div class="col-md-12 msg">
                        4111111111111111 <br><br>
                    </div>
                </div>

                <form name="creditCard" class="col-md-12 px-5">

                    <div class="row mb-3">
                        <input type="text" class="form-control" placeholder="Nome igual no cartão" name="card_name">
                    </div>
                    <div class="row mb-3">
                        <input @keyup="getBrand" type="text" class="form-control"
                               placeholder="Número do Cartão" style="width: 80%;"
                               name="card_number"><span class="brand"></span>
                        <input type="hidden" name="card_brand">
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <div class="row"><input type="text" class="form-control" placeholder="Mês Venc."
                                                    name="card_month"></div>
                        </div>
                        <div class="col-6">
                            <div class="row"><input type="text" class="form-control" placeholder="Ano Venc."
                                                    name="card_year"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <input type="text" class="form-control" placeholder="Código de Segurança" name="card_cvv">
                    </div>

                    <div class="row mb-3 installments"></div>

                    <div class="row">
                        <button @click.prevent="cardToken" class="btn btn-success w-100 processCheckout"
                                data-payment-type="CREDITCARD">Finalizar Compra
                        </button>
                    </div>

                </form>
            </div>

            <div class="col-lg-6 px-5" style="border-left:1px solid #000">

                <h3>Pagamento via boleto</h3>

                <button class="btn btn-primary w-100 mt-5 processCheckout" wire:click.prevent="payBoleto">Gerar Boleto
                </button>

            </div>

        </div>
    </div>

    <div wire:loading>
        <div class="row">
            @include('user.components.loader')
        </div>
    </div>


    <script type="text/javascript" src=
    "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>

    <script>

        /*
        *  - Recuperar o token do cartão
        *  - Enviar o token e o sender hash para o componente php
        * */


        function creditCard() {
            return {
                brandName: '',
                getBrand(e) {
                    let cardNumber = e.target.value;

                    if(cardNumber.length == 6){
                        console.log(cardNumber);

                        PagSeguroDirectPayment.getBrand({
                            cardBin: cardNumber,
                            success: (response) => {
                                this.brandName = response.brand.name;
                            }
                        });

                        // PagSeguroDirectPayment.getInstallments({
                        //     amount: 118.80,
                        //     maxInstallmentNoInterest: 2,
                        //     brand: this.brandName,
                        //     success: function(response){
                        //         console.log(response.installments.visa);
                        //
                        //         let selectInstallments = drawSelectInstallments(response.installments.visa);
                        //         document.querySelector('div.installments').innerHTML = selectInstallments;
                        //     }
                        // });
                    }
                },
                cardToken(e) {

                    let formEl = document.querySelector('form[name=creditCard]');
                    let formData = new FormData(formEl);

                    PagSeguroDirectPayment.createCardToken({
                        cardNumber: formData.get('card_number'),
                        brand: this.brandName,
                        cvv: formData.get('card_cvv'),
                        expirationMonth: formData.get('card_month'),
                        expirationYear: formData.get('card_year'),
                        success: function(response) {
                            let payload = {
                                'token': response.card.token,
                                'senderHash': PagSeguroDirectPayment.getSenderHash()
                            };

                            console.log(payload);
                            Livewire.emit('paymentData', payload);
                        }
                    });

                }
            }
        }

        function drawSelectInstallments(installments) {
            let select = '<label>Opções de Parcelamento:</label>';

            select += '<select class="form-control select_installments">';
            for (let l of installments) {
                select += `<option value="${l.quantity}|${l.installmentAmount}">${l.quantity}x de ${l.installmentAmount} - Total fica ${l.totalAmount}</option>`;
            }
            select += '</select>';

            return select;
        }
    </script>


</div>
