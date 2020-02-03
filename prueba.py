from urllib.parse import urlencode
from urllib.request import Request, urlopen

url = "http://127.0.0.1:8000/api/pokemons" 
post_fields = {"name":"Charizard"}   

request = Request(url, urlencode(post_fields).encode())
json = urlopen(request).read().decode()
print(json)