from flask import Flask
from twilio.rest import TwilioRestClient
app = Flask(__name__)

@app.route("/")
def hello():
    # Download the library from twilio.com/docs/libraries
 	

	# Get these credentials from http://twilio.com/user/account
	account_sid = ""
	auth_token = ""
	client = TwilioRestClient(account_sid, auth_token)
 
	# Make the call
	call = client.calls.create(to="",  # Any phone number
                           	from_="", # Must be a valid Twilio number
                           	url="https://my.mixtape.moe/hcgvty.mp3")
	print call.sid

	return '''
		this is a test'''

if __name__ == "__main__":
    app.run()

