from twilio.rest import TwilioRestClient
# put your own credentials here
ACCOUNT_SID = ""
AUTH_TOKEN = ""
client = TwilioRestClient(ACCOUNT_SID, AUTH_TOKEN)
client.messages.create( to="+1",  from_="+1", body="A user has shown interest in your charity")
