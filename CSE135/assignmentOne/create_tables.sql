CREATE TABLE countries (
    c_id          SERIAL PRIMARY KEY,
    country  TEXT
);

CREATE TABLE majors (
    m_id          SERIAL PRIMARY KEY,
    major  TEXT
);

CREATE TABLE specializations (
    s_id          SERIAL PRIMARY KEY,
    specialization  TEXT
);

CREATE TABLE universities (
    u_id          SERIAL PRIMARY KEY,
    country_state TEXT,
    university  TEXT	
);

CREATE TABLE applicants (
    a_id          SERIAL PRIMARY KEY,
    first_name TEXT,
    middle_initial TEXT,
    last_name TEXT,
    specialization TEXT,
    citizenship TEXT,
    residence TEXT,
    street_address TEXT,
    city TEXT,
    state TEXT,
    country_code TEXT,
    zip_code TEXT,
    area_code TEXT,
    number TEXT
);

CREATE TABLE degrees (
    d_id          SERIAL PRIMARY KEY,
    a_id integer,
    m_id integer,
    u_id integer,
    major TEXT,
    month TEXT,
    year TEXT
);

