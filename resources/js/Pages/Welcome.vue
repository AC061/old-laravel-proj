<template>
<v-container fill-height fluid>
    <v-row class="text-center" >
      <v-col cols="12">
        <v-img
          src='images/logo3.png'
          class="my-3"
          contain
          height="500"
        />
      </v-col>
    </v-row>
    
    <v-row class="text-center" justify="center" id="login_buttons" >
      <v-col cols="12">
        <v-btn min-width="400" prepend-icon="$vuetify" x-large variant="tonal"  outlined href="/login" >
          Ingreso
        </v-btn>
      </v-col> 
      <v-col cols="12">
        <v-btn  min-width="400" prepend-icon="$vuetify" x-large variant="tonal"  outlined  href="/register">
          Registro
        </v-btn>
      </v-col>
</v-row>

</v-container>
  
</template>