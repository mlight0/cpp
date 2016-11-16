-- Table: public.tbl_users

-- DROP TABLE public.tbl_users;

--CREATE EXTENSION pgcrypto;  

--SELECT gen_random_uuid();

CREATE TABLE public.tbl_users
(
  users_user_id uuid PRIMARY KEY DEFAULT gen_random_uuid(),
  user_first_name character varying(50),
  user_middle_initial character varying(1),
  user_last_name character varying(50),
  user_email character varying(50),
  user_password character varying(150),
  user_status integer,
  user_updated_date date DEFAULT ('now'::text)::date,
  user_created_date date NOT NULL DEFAULT ('now'::text)::date
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.tbl_users
  OWNER TO postgres;
