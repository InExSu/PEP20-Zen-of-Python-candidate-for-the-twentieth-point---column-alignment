# usually
def store(measurements):
    table = sqlalchemy.Table('measurements', metadata,
        sqlalchemy.Column('id', sqltypes.Integer, primary_key=True),
        sqlalchemy.Column('weight', sqltypes.Float),
        sqlalchemy.Column('temperature', sqltypes.Float),
        sqlalchemy.Column('color', sqltypes.String(32)),
        )
# point 20
    table = sqlalchemy.Table(
        'measurements', metadata,
        sqlalchemy.Column('id',           sqltypes.Integer,  primary_key=True),
        sqlalchemy.Column('weight',       sqltypes.Float),
        sqlalchemy.Column('temperature',  sqltypes.Float),
        sqlalchemy.Column('color',        sqltypes.String(32)),

#  usually
def store(measurements):
    c.execute("""
        CREATE TABLE IF NOT EXISTS measurements
          id int(11) NOT NULL auto_increment,
          weight float,
          temperature float,
          color varchar(32)
          PRIMARY KEY id
          ENGINE=InnoDB CHARSET=utf8
          """)

# point 20
def store(measurements):
    c.execute("""
        CREATE TABLE IF NOT EXISTS measurements
          id          int(11) NOT NULL auto_increment,
          weight      float,
          temperature float,
          color       varchar(32)
          PRIMARY KEY id
          ENGINE=InnoDB CHARSET=utf8
          """)

# usually
def process(response):
    lx = lxml.html.fromstring(response.body)

    title = lx.find('./head/title').text

    selector = lxml.cssselect.CSSSelector('#main > div.text')

    divs = selector(lx)

# point 20  
def process(response):
    lx       = lxml.html.fromstring(response.body)

    title    = lx.find('./head/title').text

    selector = lxml.cssselect.CSSSelector('#main > div.text')

    divs     = selector(lx)

# в двадцатый пункт может подойти: "Выравнивание по колонкам"
