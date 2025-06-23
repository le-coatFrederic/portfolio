package fred.portfolio.controllers;

import fred.portfolio.data.dtos.TechShowDTO;
import fred.portfolio.services.TechService;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import java.util.List;

@RestController
@RequestMapping("/")
public class HomeController {
    private final TechService techService;

    public HomeController(
            TechService techService
    ) {
        this.techService = techService;
    }

    @GetMapping("/api/techs")
    public ResponseEntity<List<TechShowDTO>> getAllTechs() {
        List<TechShowDTO> techList = this.techService.getAll();
        return new ResponseEntity<>(techList, HttpStatus.OK);
    }
}
