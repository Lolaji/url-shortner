<template>
    <BreezeGuestLayout>
        <Head title="Create new shortner" />
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
          <form @submit.prevent="submit">

               <div class="flex items-center align-items-center mt-4">
                    <div>
                         <BreezeInput id="url" type="url" class="mt-1 block w-full" v-model="form.url" required autofocus autocomplete="url" placeholder="Enter URL" />
                    </div>
                    <BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                         Shorten
                    </BreezeButton>
               </div>
          </form>
        </div>
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
               <div class="mt-2 text-center">Copy URL</div><hr>

               <div class="py-2" :class="{'opacity-50': !form.shortUrl}">
                    {{form.shortUrl ?? 'No generated shortning URL'}}
               </div>
        </div>
    </BreezeGuestLayout>
</template>

<script setup>
import { reactive } from 'vue';
import BreezeButton from '@/Components/Button.vue';
import BreezeCheckbox from '@/Components/Checkbox.vue';
import BreezeGuestLayout from '@/Layouts/Guest.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import axios from 'axios';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    url: '',
    shortUrl: null
});

const submit = () => {
    axios.post('/api/create', form).then(res => {

         if (res.data.success) {
              form.shortUrl = res.data.url;
              console.log(res.data.message);
         } else {
              console.log(res.data.message);
         }
    }).catch(err => {
         if (err.response)
               console.log(err.response.data.message);
    })
};
</script>
