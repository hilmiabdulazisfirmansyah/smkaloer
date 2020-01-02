 <template>
  <div class="col-md-3">
    <!-- DIRECT CHAT PRIMARY -->
    <div class="box box-primary direct-chat direct-chat-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Direct Chat</h3>

        <div class="box-tools pull-right">
          <span data-toggle="tooltip" title="" class="badge bg-light-blue" data-original-title="3 New Messages">3</span>
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="" data-widget="chat-pane-toggle" data-original-title="Contacts">
            <i class="fa fa-comments"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <!-- Conversations are loaded here -->
          <div class="direct-chat-messages" >
            <!-- Message. Default to the left -->
            
            <!-- /.direct-chat-msg -->

            <!-- Message to the right -->
            <div class="direct-chat-msg right" v-for="(message, index) in messages" :key="index">
              <div class="direct-chat-info clearfix">
                <span class="direct-chat-name pull-right">{{ message.user.name }}</span>
                <span class="direct-chat-timestamp pull-left">{{ message.created_at }}</span>
              </div>
              <!-- /.direct-chat-info -->
              <img class="direct-chat-img" src="/lte/img/user3-128x128.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
              <div class="direct-chat-text">
                {{ message.message }}
              </div>
              <!-- /.direct-chat-text -->
            </div>
            <!-- /.direct-chat-msg -->
          </div>
          <!--/.direct-chat-messages-->

          <!-- Contacts are loaded here -->
          <div class="direct-chat-contacts">
            <ul class="contacts-list">
              <li>
                <a href="#">
                  <img class="contacts-list-img" src="/lte/img/user1-128x128.jpg" alt="User Image">

                  <div class="contacts-list-info">
                    <span class="contacts-list-name">
                        kontak
                      <small class="contacts-list-date pull-right">2/28/2015</small>
                    </span>
                    <span class="contacts-list-msg">How have you been? I was...</span>
                  </div>
                  <!-- /.contacts-list-info -->
                </a>
              </li>
              <!-- End Contact Item -->
            </ul>
            <!-- /.contatcts-list -->
          </div>
          <!-- /.direct-chat-pane -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer" style="">
            <div class="input-group">
              <input
                  @keyup.enter="sendMessage"
                  v-model="newMessage"
                  type="text" 
                  name="message" 
                  placeholder="Tulis Pesan ..." 
                  class="form-control">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-primary btn-flat">Send</button>
              </span>
            </div>
        </div>
        <!-- /.box-footer-->
      </div>
      <!--/.direct-chat -->
    </div>
  </template>

 <!--  <script>
  export default {
    props:['user'],

    data() {
      return {
        message: [],
        newMessage:''
      }
    },

    created() {
      this.fetchMessages();
      Echo.join('chat')
        .listen('MessageSent', (event) => {
            this.messages.push(event.message);
        });
    },

    methods: {
      fetchMessages() {
        axios.get('messages').then(response => {
          this.messages = response.data;
        })
      },

      sendMessage(){

          this.messages.push({
            user: this.user,
            message: this.newMessage
          });

          axios.post('messages', {message: this.newMessage});
          this.newMessage = '';
      }
    }
  }
  </script> -->