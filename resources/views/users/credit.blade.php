<x-layout>
    <section class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Profil - crédit
                </h1>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <form method="POST" action="">
                        <div class="field is-horizontal">
                            <div class="field-label is-normal">
                                <label class="label">Montant</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control">
                                        <input class="input" type="number" name="amount" required>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-label">
                                <label class="label">Méthode</label>
                            </div>
                            <div class="field-body">
                                <div class="field is-narrow">
                                    <div class="control">
                                        <label for="payment_SEPA" class="radio">
                                            <input type="radio" name="payment_method" id="payment_SEPA" required>
                                            Virement bancaire 
                                        </label>
                                        <label for="payment_cash" class="radio">
                                            <input type="radio" name="payment_method" id="payment_cash">
                                            Cash (tronc)
                                        </label>
                                        <label for="payment_QR" class="radio">
                                            <input type="radio" name="payment_method" id="payment_QR">
                                            QR code cuisine
                                        </label>
                                        <label for="payment_sumup" class="radio">
                                            <input type="radio" name="payment_method" id="payment_sumup">
                                            Sumup!
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="field is-horizontal">
                            <div class="field-label">
                                <!-- Left empty for spacing -->
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <button class="button is-primary">
                                            Recharger!
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>
</x-layout>
