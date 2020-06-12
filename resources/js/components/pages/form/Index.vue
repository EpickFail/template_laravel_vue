<template>
    <div>
        <h1>Form</h1>
        <form @submit.prevent="submitForm">
            <div>
                <label for="name">Name:</label><br>
                <input id="name" type="text" v-model="name" required/>
            </div>
            <div>
                <label for="phone">Phone:</label><br>
                <input id="phone" type="phone" v-model="phone" required/>
            </div>
            <div>
                <label for="message">Message:</label><br>
                <textarea id="message" v-model="message" required></textarea>
            </div>
            <button :class="[name ? activeClass : '']" type="submit">Submit</button>
        </form>
    </div>
</template>
<script>
    export default {
        data: function () {
            return {
                name: '',
                phone: '',
                message: '',
                response: '',
                activeClass: 'active'
            };
        },
        methods: {
            submitForm: function () {
                axios.post('/form_test/api/form', {
                    name: this.name,
                    phone: this.phone,
                    message: this.message
                }).then(response => {
                    this.response = alert(JSON.stringify(response.statusText));
                }).catch(response => {
                    this.response = alert('Wrong phone!');
                });
            }
        }
    }
</script>
