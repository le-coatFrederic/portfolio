package online.fredinfo.portfolio.controllers.api;

import online.fredinfo.portfolio.dto.TechDetailDTO;
import online.fredinfo.portfolio.dto.TechFormDTO;
import org.springframework.http.ResponseEntity;
import java.util.List;

public interface TechApi {
    ResponseEntity<List<TechDetailDTO>> getAllTechs();
    ResponseEntity<TechDetailDTO> getTechById(Long id);
    ResponseEntity<List<TechDetailDTO>> getTechsByName(String name);
    ResponseEntity<List<TechDetailDTO>> getTechsByProject(Long projectId);
    ResponseEntity<TechDetailDTO> createTech(TechFormDTO tech);
    ResponseEntity<TechDetailDTO> updateTech(Long id, TechFormDTO tech);
    ResponseEntity<Void> deleteTech(Long id);
} 