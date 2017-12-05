<form action="" method="post">
    <div class="columns">
        <div class="column">
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input name="name" class="input" type="text" placeholder="Your name" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input name="email" class="input" type="email" placeholder="Your email" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Your age</label>
                <div class="control">
                    <input name="age" class="input" type="number" min="18" placeholder="Your age" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Password</label>
                <div class="control">
                    <input name="password" class="input" type="password" placeholder="Your password" required>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="field">
                <label class="label">Date you would like to get your order.</label>
                <div class="control">
                    <input name="order_date" class="input" type="date">
                </div>
            </div>

            <div class="columns">
                <div class="column">
                    <div class="field">
                        <label class="label">Country</label>
                        <div class="control">
                            <div class="select">
                                <select name="country" required>
                                    <option value="" checked>Your country</option>
                                    <option value="Spain">Spain</option>
                                    <option value="UK">UK</option>
                                    <option value="France">France</option>
                                    <option value="Germany">Germany</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="field">
                        <label class="label">Address</label>
                        <div class="control">
                            <input class="input" required type="text" name="address" placeholder="221B Baker Street">
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="field">
                <label class="label">Your products</label>
                <div class="control">
                    <textarea name="products" class="textarea" placeholder="Place here the name of the products you would like to get." required></textarea>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    Would you like to hire the premium service?
                    <label class="radio">
                        <input type="radio" name="premium">
                        Yes
                    </label>
                    <label class="radio">
                        <input type="radio" name="premium">
                        No
                    </label>
                </div>
            </div>
        </div>
    </div>    

    <div class="field">
        <div class="control">
            <label class="checkbox">
                <input type="checkbox" required>
                I agree to the <a href="#">terms and conditions</a>
            </label>
        </div>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <button type="submit" class="button is-link">Submit</button>
        </div>
        <div class="control">
            <button type="reset" class="button is-text">Cancel</button>
        </div>
    </div>
</form>
