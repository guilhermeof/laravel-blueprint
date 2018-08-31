drakov -f api.apib -p 4000

dredd api.apib http://localhost:4000

aglio -i api.apib --server