### Required:
- Domain DNS Access
- an email associated with the domain in question to be used as a verification tool and sending email﻿

### zoho email group account creation
- Create a group email from zoho
- zoho account noreply@amwn.net
- ask for last pass login from Brandon
- https://mail.zoho.com/cpanel/index.do#groups
- click "add group"
- group name: domainname.com
- Group Email id: domainname.com@amwn.net
- Access Level: Everyone (default)
- Moderators: leave blank
- click "create group"
- Add Members (on the right side of the window)
- add all emails of users who should receive emails sent to this group
- all members will need to verify the invitation
- note: sometimes you can click the little circle in the users row under the "status" column to force verification
- send test email
- end

### Mandrill account creation
- https://mandrill.com/signup/
- username should be the zoho email you just created domainname.com@amwn.net
- create and verify a "Sending Domain" of "domainname.com" dns access is required
- Verified Domain: click on verification email sent to the Sending Domain such as info@domainname.com
- update sending domain DKIM Settings dns zone file access required
- update sending domain SPF Settings dns zone file access required
- once the DKIM and SPF have been added click "Test DNS Settings". you may have to wait a few mins for the dns to propagate, but it should be less than 5imin
- end

### Add Mandrill plugin to WordPress
- go to https://mandrillapp.com/settings
- click "+ New API Key" or edit the existing default api key
- edit the description with domainname.com this is to help distinguish the api key in case a second key is created in the future. This is important for debugging when a second api key is used, do not skip this step you will hate yourself later for not taking the 2 seconds to do it.
- copy the api key to your clipboard
- go to domainname.com/wp-admin and install the wpmandrill
- https://wordpress.org/plugins/wpmandrill/
- got to the mandrill settings page and enter your api key
- enter the following values with the same email address as the "Sending Domain" from previous steps: FROM Name, FROM Email, Reply-To Email. The example above use "info@domainname.com". This is very important, you must use an email that can receive email and uses the "Sending Domain". Failure to do so will eventually cause your mandrill account to error out.
- checkbox: Track opens & Track clicks
- do not check "Content"
- optional use of "General Tags"
- click "Save Changes"
- perform a test form the "Send a test email using these settings" area at the bottom of the mandrill settings page in via /wp-admin
- end
