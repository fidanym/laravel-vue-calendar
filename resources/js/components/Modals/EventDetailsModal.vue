<template>
  <v-dialog v-model="show" max-width="440" @keydown.esc="close">
    <v-card v-if="!!event">
      <v-card-title class="headline">Event: '{{ event.name }}' details</v-card-title>

      <v-card-text class="event-details">
        <ul>
          <li><strong>Event start:</strong> {{ event.start }}</li>
          <li><strong>Event end:</strong> {{ event.end }}</li>
          <li><strong>Event description:</strong> {{ event.description }}</li>
        </ul>
      </v-card-text>

      <v-card-actions>
        <v-spacer></v-spacer>

        <v-btn text @click="close">
          Okay
        </v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog>
</template>

<script>
  export default {
    name: "EventDetailsModal",
    data() {
      return {
        show: false,
        event: null,
        resolve: null,
        reject: null
      }
    },
    methods: {
      open(event) {
        this.show = true
        this.event = event
        return new Promise((resolve, reject) => {
          this.resolve = resolve
          this.reject = reject
        })
      },
      close() {
        this.show = false
        this.event = null
        this.resolve(false)
      }
    }
  }
</script>

<style scoped>

</style>
