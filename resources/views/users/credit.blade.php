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
                            <div class="field-label">
                                <label class="label">Montant:</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <p class="control is-expanded">
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
                                <div class="field is-expanded">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment_method" id="payment_method">
                                        <label class="form-check-label" for="payment_method">
                                            Virement bancaire
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment_method" id="payment_method">
                                        <label class="form-check-label" for="payment_method">
                                            Cash (tronc)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment_method" id="payment_method">
                                        <label class="form-check-label" for="payment_method">
                                            QR code cuisine
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment_method" id="payment_method">
                                        <label class="form-check-label" for="payment_method">
                                            Sumup!
                                        </label>
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
