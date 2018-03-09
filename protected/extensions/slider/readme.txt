Version 1.1 - 28.09.2011
WAMP bug reported by bonnie

	line 163 changed 
		from
			$url = $this->urls[$k] ? $this->urls[$k] : $this->defaultUrl;
		to
			$url = isset($this->urls[$k]) ? $this->urls[$k] : $this->defaultUrl;

	line 164 Changed 
		from
			$alt = $this->alts[$k] ? $this->alts[$k] : $this->defaultAlt;
		to
			$alt = isset($this->alts[$k]) ? $this->alts[$k] : $this->defaultAlt;

Thanks justinas.



Version 1.0 - 30.08.2011 - First release