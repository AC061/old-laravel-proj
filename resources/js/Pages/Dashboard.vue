<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import axios from 'axios';

onMounted(() => {
  getAll();
})

let items = [
  ]

const headers = [
{ title: 'Title', align: 'start', value: 'title' },
{ title: 'Published', align: 'start', value: 'publication_dt' },
{ title: 'Author', align: 'start', value: 'author.name' },
{ title: 'Publisher', align: 'start', value: 'publisher.publisher_name' },
{ title: 'Actions', align: 'start', value: 'actions' }
  ]

  function getAll(){
                axios.get('/books',{
                    })
                .then(response=>{
                    items = response.data;
                    console.log(items);
                })
                .catch(error=>{
                    console.log(error);
                })
            }
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <v-row>
                    <v-col cols="12">
                        <v-btn
                        variant="tonal"
                        block
                        color="primary" 
                        @click="getAll()"
                        
                        > 
                            Refresh
                        </v-btn>
                    </v-col>

                </v-row>
                <v-row>
                    <v-col cols="12">
                        <v-data-table :items="items" :headers="headers"></v-data-table>
                    </v-col>
                    <h1><B></B></h1>
            </v-row>
            <v-row>

                </v-row>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
