<template>
  <v-content>
    <v-container>
      <v-sheet height="500">
        <v-skeleton-loader
            v-if="!events.length"
            class="mx-auto"
            type="table"
        ></v-skeleton-loader>
        <v-calendar
            v-if="events.length"
            type="month"
            now="2019-11-02"
            value="2019-11-02"
            :events="events"
        ></v-calendar>
      </v-sheet>
    </v-container>
  </v-content>
</template>

<script>
  export default {
    name: "Calendar",
    data: () => ({
      events: [],
    }),
    methods: {
      getEvents() {
        let self = this;
        setTimeout(() => {
          axios.get('/api/events')
              .then(response => {
                self.events = response.data;
                console.log({events: response.data})
              })
              .catch(e => {
                console.log(e)
              })
        }, 500);
      }
    },
    created() {
      this.getEvents();
    }
  }
</script>

<style scoped>

</style>
